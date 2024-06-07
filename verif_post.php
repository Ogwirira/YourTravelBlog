verifypost.html
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
                <li><a href="index.html">Home</a></li>
                <li><a href="blogpost.html">Posts</a></li>                
                <li><a href="index.html">Se déconnecter</a></li>
            </ul>
            <hr>
        </nav>
        <div class="barre">
            <h1 class="titre_2">Vérification de Post</h1>
        </div>
    </header>
    <main class="main_verif">
        <h1 class="titre_post">
            Pirate JAck lorem ipsum dolor sit amet.
        </h1>
        <section class="description_post">
            <p>Par : JIT</p>
            <p>Posté le 12/12/2012</p>
            <p>Pays: Scotland</p>
        </section>
        <img class="img_verif" id="img_read" src="assets/img1.jpg" alt="">
        <textarea class="box" name="Texte" id="" cols="50" rows="30">Lorem ipsum dolor, sit amet consectetur adipisicing elit. Sapiente ducimus sint dolores, recusandae, a magni vel beatae expedita sequi ad culpa nam, ipsum sed nobis perferendis quos porro reiciendis? Saepe?
            Vitae mollitia i fugit officia, cumque, explicabo quasi velit et dolorem cum laudantium neque necessitatibus itaque consequatur totam? Aut voluptates id modi?
            Quasi natus, dicta non quam maiores vero ipsa at vel officia, cupiditate ea repudiandae unde, illo commodi deserunt autem voluptatibus. Nihil doloribus laboriosam inventore ratione nobis placeat fugit natus libero!
        </textarea>
        <button id="submit" type="submit">Envoyez</button>
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
include 'footer.php'
?>