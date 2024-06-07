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
        <h1 class="titre"><a class="titre" href="index.html">Your Travel Tales</a></h1>
        <nav class="liens">
            <hr>
            <ul class="navbar-1">
                <li><a href="index.php">Home</a></li>
                <li><a href="blogpost.php">Posts</a></li>                
                <li><a href="index.php">Se déconnecter</a></li>
            </ul>
            <hr>
        </nav>
        <div class="barre">
            <h1 class="titre_2">Rédiger un nouveau post</h1>
        </div>
    </header>
    <main class="blog-main">
        <form class="post-form" action="verifypost.html">
            <div class="form-div">
            <label for="">Titre</label>
            <input class="box" type="text" name="">
            <label for="">Auteur</label>
            <input class="box" type="text" name="">
            <label for="">Pays</label>
            <select class="box" name="country_select">
                <option value="">Choisissez Le pays</option>
                <option value="France">France</option>
                <option value="Angleterre">Angleterre</option>
                <option value="Espagne">Espagne</option>
                <option value="Italie">Italie</option>
                <option value="Portugal">Portugal</option>
            </select>
            <label  for="">Image URL</label>
            <input class="box" type="url" name="">
            <label for="">Texte</label>
            <textarea class="box" name="" cols="30" rows="10"> </textarea>
            <button id="submit">Envoyer</button>
        </div>
        </form>
    </main>
    <section class="newsletter">
        <div class="newsletter-content">
            <!-- <img alt="newsletter-icon" class="envelope-icon" src="assets/send-message.png" /> -->
            <h2>Newsletter</h2>
            <p>Abonnez-vous pour recevoir nos derniers articles</p>
        </div>
        <form action="" method="POST" class="newsletter-form">
            <div class="form-group">
                <label for="email" class="visually-hidden">Email</label>
                <input id="email" name="email" placeholder="Email" type="email" aria-label="Email" required
                    class="email-input">
            </div>
            <div class="form-group">
                <button type="submit" class="subscribe-button">Abonnez-vous</button>
            </div>
        </form>
    </section>
    <?php
include 'commun/footer.php'
?>