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
            <h1 class="titre_2">Se Connecter pour écrire un post</h1>
        </div>
    </header>
    <main>
        <form class="login-form" action="traitement_login.php" method="post">
            <div class="form-part">
                <label class="label" for="email"> Email</label>
                <input class="box" type="email" name="email" id="email" required>
                <p class="definitionh4">Pas encore inscrit?</p>
            </div>
            <div class="form-part">
                <label class="label" for="mot de passe"> Mot de passe</label>
                <input class="box" type="password" name="password" id="password" required pattern="[A-Za-z0-9_$]{8,}">
                <p class="definitionh4">Mot de passe oublié?</p>
                <input id="submit" type="submit" value="Se connecter">
            </div>
        </form>
    </main>
    <?php
    include 'commun/footer.php'
    ?>