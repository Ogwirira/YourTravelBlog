<?php session_start(); ?>
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
                <li><a href="#carouselExampleIndicators">Posts</a></li>
                <?php if(!isset($_SESSION["email"])) : ?>
                <li class="liens"><a href="login.php"> Se connecter </a></li>
                <li class="liens"><a href="signin.php"> S'inscrire </a></li>
                <?php else : ?>
                <li class="liens"><a href="deconnexion.php"> Se Déconnecter </a></li>
                <?php endif ;?>
            </ul>
            <hr>
        </nav>
        <div class="barre">
            <h1 class="titre_2">Rédiger un nouveau post</h1>
        </div>
    </header>
    <main>
        <h1>Featured Posts</h1>
        <section class="recent-posts">
            <div class="carousel slide" id="carouselExampleIndicators" data-bs-ride="carousel"><!--            data-bs-ride="carousel"-->
                <div class="carousel-indicators">
                    <button aria-current="true" aria-label="Slide 1" class="active" data-bs-slide-to="0"
                        data-bs-target="#carouselExampleIndicators" type="button"
                        style="background-color: black"></button>
                    <button aria-label="Slide 2" data-bs-slide-to="1" data-bs-target="#carouselExampleIndicators"
                        type="button" style="background-color: black"></button>
                    <button aria-label="Slide 3" data-bs-slide-to="2" data-bs-target="#carouselExampleIndicators"
                        type="button" style="background-color: black"></button>
                </div>
                <div class="carousel-inner">
                    <div class="carousel-item active" data-bs-interval="2000"> <!-- data-bs-interval="2000">-->
                        <div class="slide-item">
                            <img alt="..." class="slide-image" src="assets/beach.jpg">
                            <div class="slide-text">
                                <h5>First slide label</h5>
                                <p>Lorem ipsum dolor, sit amet consectetur adipisicing elit. Hic veniam unde ipsum
                                    corrupti
                                    odit,
                                    enim
                                    autem, consectetur ex dicta placeat numquam maxime nesciunt maiores magnam deleniti
                                    et
                                    quos,
                                    nisi
                                    sed quaerat debitis laboriosam. Iste amet, accusamus doloremque unde error excepturi
                                    commodi,
                                    dicta
                                    reiciendis eius itaque impedit reprehenderit, ea ducimus labore!</p>

                            </div>
                        </div>
                    </div>
                    <div class="carousel-item" data-bs-interval="2000"> <!-- data-bs-interval="2000">-->
                        <div class="slide-item">
                            <img alt="..." class="slide-image" src="assets/beach.jpg">
                            <div class="slide-text">
                                <h5>second slide label</h5>
                                <p>Lorem ipsum dolor, sit amet consectetur adipisicing elit. Hic veniam unde ipsum
                                    corrupti
                                    odit,
                                    enim
                                    autem, consectetur ex dicta placeat numquam maxime nesciunt maiores magnam deleniti
                                    et
                                    quos,
                                    nisi
                                    sed quaerat debitis laboriosam. Iste amet, accusamus doloremque unde error excepturi
                                    commodi,
                                    dicta
                                    reiciendis eius itaque impedit reprehenderit, ea ducimus labore!</p>

                            </div>
                        </div>
                    </div>
                    <div class="carousel-item" data-bs-interval="2000"> <!-- data-bs-interval="2000">-->
                        <div class="slide-item">
                            <img alt="..." class="slide-image" src="assets/beach.jpg">
                            <div class="slide-text">
                                <h5>third slide label</h5>
                                <p>Lorem ipsum dolor, sit amet consectetur adipisicing elit. Hic veniam unde ipsum
                                    corrupti
                                    odit,
                                    enim
                                    autem, consectetur ex dicta placeat numquam maxime nesciunt maiores magnam deleniti
                                    et
                                    quos,
                                    nisi
                                    sed quaerat debitis laboriosam. Iste amet, accusamus doloremque unde error excepturi
                                    commodi,
                                    dicta
                                    reiciendis eius itaque impedit reprehenderit, ea ducimus labore!</p>

                            </div>
                        </div>
                    </div>
                </div>
                <button class="carousel-control-prev" data-bs-slide="prev" data-bs-target="#carouselExampleIndicators"
                    type="button">
                    <span aria-hidden="true" class="carousel-control-prev-icon" style="background-color: black"></span>
                    <span class="visually-hidden">Previous</span>
                </button>
                <button class="carousel-control-next" data-bs-slide="next" data-bs-target="#carouselExampleIndicators"
                    type="button">
                    <span aria-hidden="true" class="carousel-control-next-icon" style="background-color: black"></span>
                    <span class="visually-hidden">Next</span>
                </button>
            </div>

        </section>

        <div class="all-posts">
            <a  href="createpost.php">Ecrire un post</a>
            <div class="blogpost">
                <img alt="" class="post-img1" src="assets/beach.jpg">
                <h3>Lorem ipsum dolor sit amet.</h3>
                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Exercitationem, minima! Nulla officia iusto
                    minima? Nam cumque voluptatibus nesciunt fugiat commodi facilis sapiente ex. Architecto accusantium
                    iure repellendus totam consequulendus totam consequulendus totam consequuntur sapiente.</p>
            </div>
            <div class="blogpost">
                <img alt="" class="post-img2" src="assets/beach.jpg">
                <h3>Lorem ipsum dolor sit amet.</h3>
                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Exercitationem, minima! Nulla officia iusto
                    minima? Nam cumque voluptatibus nesciunt fugiat commodi facilis sapiente ex. Architecto accusantium
                    iure repellendus totam consequulendus totam consequulendus totam consequuntur sapiente.</p>
            </div>
            <div class="blogpost">
                <img alt="" class="post-img3" src="assets/beach.jpg">
                <h3>Lorem ipsum dolor sit amet.</h3>
                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Exercitationem, minima! Nulla officia iusto
                    minima? Nam cumque voluptatibus nesciunt fugiat commodi facilis sapiente ex. Architecto accusantium
                    iure repellendus totam consequulendus totam consequulendus totam consequuntur sapiente.</p>
            </div>
        </div>
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