<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta content="width=device-width, initial-scale=1.0" name="viewport">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <link href="https://getbootstrap.com/docs/5.3/assets/css/docs.css" rel="stylesheet">
    <title>Where can we take you?</title>
    <link href="css/style.css" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
    <script crossorigin="anonymous" src="https://kit.fontawesome.com/061abbb655.js"></script>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Inspiration&display=swap" rel="stylesheet">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Courgette&family=Inspiration&family=Pacifico&display=swap">
    <script src="https://kit.fontawesome.com/061abbb655.js" crossorigin="anonymous"></script>


</head>

<body>
    <header class="header">
        <h1 class="titre"><a class="titre" href="acceuil.php">Your Travel Tales</a></h1>
        <nav class="liens">
            <hr>
            <ul class="navbar-1">
                <li><a href="blogpost.php">Posts</a></li>
                <li><a href="login.php">Se Connecter</a></li>
                <li><a href="signin.php">S'inscrire</a></li>
            </ul>
            <hr>
        </nav>
        <div class="barre">
            <h1 class="titre_2">Créer un compte</h1>
        </div>
    </header>

    <main>
        <div class="form-div">
            <form class="signin-form"  action="traitement_signin.php" method="post" onsubmit="return validateForm()" >
                <label class="label" for="prenom">Prenom</label>
                <input class="box" type="text" name="prenom" id="prenom" required pattern="[A-Za-zÀ-ÿ' ,.-]{1,255}">
                <label class="label" for="nom">Nom</label>
                <input class="box" type="text" name="nom" id="nom" pattern="[A-Za-zÀ-ÿ' ,.-]{1,255}">
                <label class="label" for="email"> Email</label>
                <input class="box" type="email" name="email" id="email" required>
                <label class="label" for="mot de passe"> Mot de passe</label>
                <input class="box" type="password" name="password" id="password" required pattern="[A-Za-z0-9_$]{8,}">
                <label class="label" for="confirmation"> Confirmation/Mot de passe</label>
                <input class="box" type="password" name="confirmation" id="confirmation" required pattern="[A-Za-z0-9_$]{8,}">
                <input id="submit" type="submit" value="Créer">
            </form>
        </div>
    </main>
    <footer class="footer-create">
        <nav class="liens">
            <ul class="navbar-2">
                <li><a href="index.php">Posts</a></li>
                <li><a href="login.php">Se Connecter</a></li>
                <li><a href="signin.php">S'inscrire</a></li>
                <li><a href="contact.php">Contact</a></li>
            </ul>
        </nav>
        <div class="socials">
            <h5>Suivez-nous:</h5>
            <div class="social-list">
                <a href="https://www.facebook.com" target="_blank"><i class="fa-brands fa-facebook"></i></a>
                <a href="https://www.twitter.com" target="_blank"><i class="fa-brands fa-twitter"></i></i></a>
                <a href="https://www.linkedin.com" target="_blank"><i class="fa-brands fa-linkedin"></i></a>
                <a href="https://www.youtube.com" target="_blank"><i class="fa-brands fa-youtube"></i></a>
            </div>
        </div>
        <p class="copyrights">© 2024, JIT Company.</p>
    </footer>
</body>
<script type="text/javascript" async>
  function validateForm() {
    var password = document.getElementById("password").value;
    var confirmation = document.getElementById("confirmation").value;

    if (password !== confirmation) {
      alert("Les mots de passe ne correspondent pas.");
      return false;
    }

    if (!/^[A-Za-z0-9_$]{8,}$/.test(password)) {
      alert("Le mot de passe doit contenir au moins 8 caractères et ne peut contenir que des lettres, des chiffres et les caractères spéciaux _ et $.");
      return false;
    }

    return true;
  }
 </script>
</html>