<?php 
include_once("commun/inc.php");

session_start();
// Récupération des données POST

$email = isset($_POST["email"]) ? $_POST["email"] : "";
$password = isset($_POST["password"]) ? $_POST["password"] : "";


if( $email && $password ){
include_once("commun/inc.php");
try {
    // Connexion à la base de données
    $pdo = new PDO("mysql:host=$db_host;dbname=$db_name;charset=utf8", $db_user, $db_password);
    $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    $pdo->setAttribute(PDO::ATTR_DEFAULT_FETCH_MODE, PDO::FETCH_ASSOC);
    
        // Insertion des données de l'utilisateur
        $qry=$pdo->prepare("SELECT * FROM utilisateur WHERE email=?");
        $qry->execute(array($email));
        $data_user=$qry->fetch();
        //verif mot de passe
        if($data_user && password_verify($password,$data_user["password"])){
            //definition du nom grace à la session
            $_SESSION["email"]=$data_user["email"];
            header("location:acceuil.php");
        }else {
            echo('<script type="text/javascript">
            alert("Utilisateur introuvable");
            window.location.href="login.php";
            </script>');
        }
        
     }catch (PDOException $err) {
        // Gestion des erreurs SQL
        $_SESSION["compte-erreur-sql"] = $err->getMessage();

        echo "erreur";
        exit();
    }}
    ?>