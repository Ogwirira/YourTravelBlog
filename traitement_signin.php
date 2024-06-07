<?php 
include_once("commun/inc.php");

session_start();
// Récupération des données POST
$prenom = isset($_POST["prenom"]) ? $_POST["prenom"] : "";
$nom = isset($_POST["nom"]) ? $_POST["nom"] : "";
$email = isset($_POST["email"]) ? $_POST["email"] : "";
$password = isset($_POST["password"]) ? $_POST["password"] : "";
$confirmation = isset($_POST["confirmation"]) ? $_POST["confirmation"] : "";

$erreurs = [];

// Vérification du prénom
if (!preg_match("/^[A-Za-zÀ-ÿ0-9' ,.-]{1,255}$/", $prenom)) {
    $erreurs["prenom"] = "Le format du prénom est invalide";
}

// Vérification du nom
if (!preg_match("/^[A-Za-zÀ-ÿ0-9' ,.-]{1,255}$/", $nom)) {
    $erreurs["nom"] = "Le format du nom est invalide";
}

// Vérification de l'email
if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
    $erreurs["email"] = "L'email n'est pas valide";
}
// Vérification du mot de passe
if (!preg_match("/^[A-Za-z0-9_$]{8,}$/", $password)) {
    $erreurs["password"] = "Le format du mot de passe n'est pas valide";
}

if ($password !== $confirmation) {
    $erreurs["confirmation"] = "Les mots de passe ne correspondent pas";
}
// Protection XSS
$prenom = htmlspecialchars($prenom);
$nom = htmlspecialchars($nom);
$email = htmlspecialchars($email);
$password = htmlspecialchars($password);

// Gestion des erreurs
if (count($erreurs) > 0) {
    $_SESSION["donnees"]["prenom"] = $prenom;
    $_SESSION["donnees"]["nom"] = $nom;
    $_SESSION["donnees"]["email"] = $email;
    $_SESSION["donnees"]["password"] = $password;
    $_SESSION["erreurs"] = $erreurs;
    echo "Désolé, les champs ne sont pas corrects";
    echo "<a href='signin.php'>Vers la page signin</a>";
    exit(); // Arrêter l'exécution en cas d'erreurs
}

// Parcourir le tableau et valider les entrées
$tableauDonnes = [];
foreach ($_POST as $key => $val) {
    $tableauDonnes[":" . $key] = isset($val) && !empty($val) ? htmlspecialchars($val) : null;
}

// Cryptage du mot de passe
$password= password_hash($password, PASSWORD_BCRYPT);

include_once("commun/inc.php");
try {
    // Connexion à la base de données
    $pdo = new PDO("mysql:host=$db_host;dbname=$db_name;charset=utf8", $db_user, $db_password);
    $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    $pdo->setAttribute(PDO::ATTR_DEFAULT_FETCH_MODE, PDO::FETCH_ASSOC);

//    Préparation de la requête pour vérifier si l'email existe dans la base
   $sql = "SELECT COUNT(*) as nb FROM utilisateur WHERE email=?";
   $qry = $pdo->prepare($sql);
   $qry->execute([$tableauDonnes[":email"]]);
   $row = $qry->fetch();

        //    Vérification si l'email existe
        if ($row["nb"] > 0) { // Changé de === 1 à > 0 pour être plus générique
            echo ('<script type="text/javascript">
        alert("Votre email existe déjà dans notre base de données, veuillez en essayer un autre");
        window.location.href="signin.php";
        </script>');
        } else {
    
        // Insertion des données de l'utilisateur
        $sql = "INSERT INTO utilisateur(prenom, nom, email, password) VALUES (:prenom, :nom, :email, :password)";
        $qry = $pdo->prepare($sql);
        $qry->execute([
            ':prenom' => $prenom,
            ':nom' => $nom,
            ':email' => $email,
            ':password' => $password]);
        unset($pdo);
        echo ('<script type="text/javascript">
        alert("Vous vous êtes inscrit avec succès, vous pouvez vous connecter maintenant");
        window.location.href="login.php";
        </script>');
     }
        
    } catch (PDOException $err) {
        // Gestion des erreurs SQL
        $_SESSION["compte-erreur-sql"] = $err->getMessage();
        header("location:pageerreur.php");
        exit();
    }
    ?>