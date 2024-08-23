<?php
session_start();

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <title>Mom&Son -GUIDE</title>
    <meta content="width=device-width, initial-scale=1.0" name="viewport">
    <meta content="" name="keywords">
    <meta content="" name="description">

    <!-- Favicon -->
    <link href="img/favicon.ico" rel="icon">

    <!-- Google Web Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Heebo:wght@400;500;600&family=Nunito:wght@600;700;800&display=swap" rel="stylesheet">

    <!-- Icon Font Stylesheet -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.10.0/css/all.min.css" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.4.1/font/bootstrap-icons.css" rel="stylesheet">

    <!-- Libraries Stylesheet -->
    <link href="lib/animate/animate.min.css" rel="stylesheet">
    <link href="lib/owlcarousel/assets/owl.carousel.min.css" rel="stylesheet">

    <!-- Customized Bootstrap Stylesheet -->
    <link href="css/bootstrap.min.css" rel="stylesheet">

    <!-- Template Stylesheet -->
    <link href="css/style.css" rel="stylesheet">
</head>
<body>



    <!-- Spinner Start -->
    <div id="spinner" class="show bg-white position-fixed translate-middle w-100 vh-100 top-50 start-50 d-flex align-items-center justify-content-center">
        <div class="spinner-border text-primary" style="width: 3rem; height: 3rem;" role="status">
            <span class="sr-only">Loading...</span>
        </div>
    </div>
    <!-- Spinner End -->


     <!-- Navbar Start -->
     <nav class="navbar navbar-expand-lg bg-white navbar-light shadow sticky-top p-0">
        <a href="index.php" class="navbar-brand d-flex align-items-center px-4 px-lg-5">
            <h2 class="m-0 text-primary"><i class="fa fa-book me-3"></i>Mom&Son</h2>
        </a>
        <button type="button" class="navbar-toggler me-4" data-bs-toggle="collapse" data-bs-target="#navbarCollapse" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
            
        <div class="collapse navbar-collapse" id="navbarCollapse">
            <div class="navbar-nav ms-auto p-4 p-lg-0">
                <a href="index.php" class="nav-item nav-link">Accueil</a>
                <a href="about.php" class="nav-item nav-link">Découvrir</a>
                <a href="contact.php" class="nav-item nav-link">Contact</a>
                <?php if (isset($_SESSION['email'])): ?>
                    <a href="compte.php" class="btn btn-primary py-4 px-lg-5 d-none d-lg-block">Mon Compte<i class="fa fa-arrow-right ms-3"></i></a>
                <?php else: ?>
                    <a href="inscription.php" class="btn btn-primary py-4 px-lg-5 d-none d-lg-block">S'inscrire<i class="fa fa-arrow-right ms-3"></i></a>
                <?php endif; ?>                
            </div>
        </div>
    </nav>
    <!-- Navbar End -->


    <!-- Carousel Start -->
    <div class="container-fluid p-0 mb-5">
        <div class="owl-carousel header-carousel position-relative">
            <div class="owl-carousel-item position-relative">
                <img class="img-fluid" src="img/bbb.jpg" alt="">
                <div class="position-absolute top-0 start-0 w-100 h-100 d-flex align-items-center" style="background: rgba(24, 29, 56, .7);">
                    <div class="container">
                        <div class="row justify-content-start">
                            <div class="col-sm-10 col-lg-8">
                                <h5 class="text-primary text-uppercase mb-3 animated slideInDown">Guider Votre Enfant</h5>
                                <h1 class="display-3 text-white animated slideInDown">Développer La Créativité De Votre Enfant</h1>
                                <p class="fs-5 text-white mb-4 pb-2">Le parent n'est plus le "tout sachant", mais le dépositaire d'une grande et noble mission : celle d'élever et éduquer son enfant pour le conduire à sa pleine autonomie...".</p>
                                <a href="info.php" class="btn btn-primary py-md-3 px-md-5 me-3 animated slideInLeft">Savoir Plus</a>
                                <?php if (isset($_SESSION['email'])): ?>
                    <a href="compte.php" class="btn btn-primary py-md-3 px-md-5 me-3 animated slideInLeft">Mon Compte<i class="fa fa-arrow-right ms-3"></i></a>
                <?php else: ?>
                    <a href="inscription.php" class="btn btn-primary py-md-3 px-md-5 me-3 animated slideInLeft">S'inscrire<i class="fa fa-arrow-right ms-3"></i></a>
                <?php endif; ?>                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="owl-carousel-item position-relative">
                <img class="img-fluid" src="img/ddd.jpg" alt="">
                <div class="position-absolute top-0 start-0 w-100 h-100 d-flex align-items-center" style="background: rgba(24, 29, 56, .7);">
                    <div class="container">
                        <div class="row justify-content-start">
                            <div class="col-sm-10 col-lg-8">
                                <h5 class="text-primary text-uppercase mb-3 animated slideInDown">Guider Votre Enfant</h5>
                                <h1 class="display-3 text-white animated slideInDown"> « Les Deux Secrets D’un Succès : La Qualité Et La Créativité »   Paul Bocuse</h1>
                                <p class="fs-5 text-white mb-4 pb-2">Le parent n'est plus le "tout sachant", mais le dépositaire d'une grande et noble mission : celle d'élever et éduquer son enfant pour le conduire à sa pleine autonomie...".</p>
                                <a href="info.php" class="btn btn-primary py-md-3 px-md-5 me-3 animated slideInLeft">Savoir Plus</a>
                                <?php if (isset($_SESSION['email'])): ?>
                    <a href="compte.php" class="btn btn-primary py-md-3 px-md-5 me-3 animated slideInLeft">Mon Compte<i class="fa fa-arrow-right ms-3"></i></a>
                <?php else: ?>
                    <a href="inscription.php" class="btn btn-primary py-md-3 px-md-5 me-3 animated slideInLeft">S'inscrire<i class="fa fa-arrow-right ms-3"></i></a>
                <?php endif; ?>                            
            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Carousel End -->


    <!-- Service Start -->
    <div class="container-xxl py-5">
        <div class="container">
            <div class="row g-4">
                <div class="col-lg-3 col-sm-6 wow fadeInUp" data-wow-delay="0.1s">
                    <div class="service-item text-center pt-3">
                        <div class="p-4">                            
                        <i class="fa fa-3x fa-graduation-cap text-primary mb-4"></i>
                            <h5 class="mb-3"><a href="inscription.php">Cours et Exercices Éducatifs</a></h5>
                            <p>Découvrons ensemble des cours enrichissants et des exercices stimulants pour un apprentissage complet.</p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-sm-6 wow fadeInUp" data-wow-delay="0.3s">
                    <div class="service-item text-center pt-3">
                        <div class="p-4">
                        <i class="fa fa-3x fa-tv text-primary mb-4"></i>
                            <h5 class="mb-3"><a href="inscription.php">Vidéos Éducatives</a></h5>
                            <p>Découvrons ensemble des vidéos éducatives fascinantes à travers l'apprentissage visuel.</p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-sm-6 wow fadeInUp" data-wow-delay="0.5s">
                    <div class="service-item text-center pt-3">
                        <div class="p-4">
                        <i class="fa fa-3x fa-gamepad text-primary mb-4"></i>
                            <h5 class="mb-3"><a href="inscription.php">Jeux Éducatifs</a></h5>
                            <p>Découvrons ensemble des jeux éducatifs passionnants à travers l'apprentissage.</p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-sm-6 wow fadeInUp" data-wow-delay="0.7s">
                    <div class="service-item text-center pt-3">
                        <div class="p-4">
                            <i class="fa fa-3x fa-book-open text-primary mb-4"></i>
                            <h5 class="mb-3"><a href="inscription.php">Bibliothèque d’Histoire</a></h5>
                            <p>Découvrons ensemble de magnifiques histoires à travers la lecture.</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Service End -->



    <!-- Testimonial Start -->
    <div class="container-xxl py-5 wow fadeInUp" data-wow-delay="0.1s">
        <div class="container">
            <div class="text-center">
                <h6 class="section-title bg-white text-center text-primary px-3">Témoignage</h6>
                <h1 class="mb-5">Ce que disent nos utilisateurs !</h1>
            </div>
            <div class="owl-carousel testimonial-carousel position-relative">
                <div class="testimonial-item text-center">
                    <img class="border rounded-circle p-2 mx-auto mb-3" src="img/testimonial-1.jpg" style="width: 80px; height: 80px;">
                    <h5 class="mb-0">Alice M.</h5>
                    <p>Utilisateur</p>
                    <div class="testimonial-text bg-light text-center p-4">
                    <p class="mb-0">"J'adore ce site ! Les ressources éducatives sont variées et bien organisées. J'ai trouvé des jeux et des vidéos qui ont vraiment aidé mes enfants à apprendre tout en s'amusant. Très satisfait !"</p>
                    </div>
                </div>
                <div class="testimonial-item text-center">
                    <img class="border rounded-circle p-2 mx-auto mb-3" src="img/testimonial-2.jpg" style="width: 80px; height: 80px;">
                    <h5 class="mb-0">Jean-Pierre L.</h5>
                    <p>Utilisateur</p>
                    <div class="testimonial-text bg-light text-center p-4">
                    <p class="mb-0">"La qualité des cours en ligne est excellente. Les exercices sont bien conçus et les vidéos sont très instructives. C'est un outil précieux pour compléter mon apprentissage."</p>
                    </div>
                </div>
                <div class="testimonial-item text-center">
                    <img class="border rounded-circle p-2 mx-auto mb-3" src="img/testimonial-3.jpg" style="width: 80px; height: 80px;">
                    <h5 class="mb-0">Marc D.</h5>
                    <p>Utilisateur</p>
                    <div class="testimonial-text bg-light text-center p-4">
                    <p class="mb-0">"Une plateforme fantastique ! Les témoignages et les retours sont très utiles pour choisir les meilleurs outils éducatifs. Les jeux et les activités proposés sont à la fois éducatifs et divertissants. Merci pour ce travail formidable !"</p>
                    </div>
                </div>
                <div class="testimonial-item text-center">
                    <img class="border rounded-circle p-2 mx-auto mb-3" src="img/testimonial-4.jpg" style="width: 80px; height: 80px;">
                    <h5 class="mb-0">Sophie R.</h5>
                    <p>Utilisateur</p>
                    <div class="testimonial-text bg-light text-center p-4">
                    <p class="mb-0">"Ce site a transformé la façon dont j'aborde l'éducation. Les contenus sont interactifs et captivants, ce qui rend l'apprentissage beaucoup plus agréable. Je le recommande vivement à tous ceux qui cherchent des ressources éducatives innovantes !"</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Testimonial End -->
        

    <!-- Footer Start -->
    <div class="container-fluid bg-dark text-light footer pt-5 mt-5 wow fadeIn" data-wow-delay="0.1s">
        <div class="container py-5">
            <div class="row g-5">
                <div class="col-lg-3 col-md-6">
                    <h4 class="text-white mb-3">Lien Rapide</h4>
                    <a class="btn btn-link" href="inscription.php">S'inscrire</a>
                    <a class="btn btn-link" href="about.php">À Propos de Nous</a>
                    <a class="btn btn-link" href="courses.php">Nous cours</a>
                    <a class="btn btn-link" href="contact.php">Contactez-nous</a>
                </div>
                <div class="col-lg-3 col-md-6">
                    <h4 class="text-white mb-3">Contact</h4>
                    <p class="mb-2"><i class="fa fa-map-marker-alt me-3">  4135 Ajim, Djerba</i></p>
                    <p class="mb-2"><i class="fa fa-phone-alt me-3"></i>+216 54324527</p>
                    <p class="mb-2"><i class="fa fa-envelope me-3"></i>nessrinehazzar000àgmail.com</p>
                    <div class="d-flex pt-2">
                        <a class="btn btn-outline-light btn-social" href=""><i class="fab fa-twitter"></i></a>
                        <a class="btn btn-outline-light btn-social" href=""><i class="fab fa-facebook-f"></i></a>
                        <a class="btn btn-outline-light btn-social" href=""><i class="fab fa-youtube"></i></a>
                        <a class="btn btn-outline-light btn-social" href=""><i class="fab fa-linkedin-in"></i></a>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6">
                    <h4 class="text-white mb-3">Galerie</h4>
                    <div class="row g-2 pt-2">
                        <div class="col-4">
                            <img class="img-fluid bg-light p-1" src="img/ccc.jpeg" alt="">
                        </div>
                        <div class="col-4">
                            <img class="img-fluid bg-light p-1" src="img/sss.webp" alt="">
                        </div>
                        <div class="col-4">
                            <img class="img-fluid bg-light p-1" src="img/ddd.jpg" alt="">
                        </div>
                        <div class="col-4">
                            <img class="img-fluid bg-light p-1" src="img/nnn.jpg" alt="">
                        </div>
                        <div class="col-4">
                            <img class="img-fluid bg-light p-1" src="img/ppp.jpg" alt="">
                        </div>
                        <div class="col-4">
                            <img class="img-fluid bg-light p-1" src="img/fff.jpeg" alt="">
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6">
    <h4 class="text-white mb-3">Newsletter</h4>
    <p>Abonnez-vous à notre newsletter pour recevoir les dernières nouvelles, mises à jour et offres exclusives directement dans votre boîte mail.</p>
    <div class="position-relative mx-auto" style="max-width: 400px;">
        <form action="../models/inscri.php" method="POST">
            <input class="form-control border-0 w-100 py-3 ps-4 pe-5" type="email" name="email" placeholder="Email" required>
            <button type="submit" class="btn btn-primary py-2 position-absolute top-0 end-0 mt-2 me-2">Inscription</button>
        </form>
    </div>
</div>

            </div>
        </div>
        </div>
    </div>
    <!-- Footer End -->


    <!-- Back to Top -->
    <a href="#" class="btn btn-lg btn-primary btn-lg-square back-to-top"><i class="bi bi-arrow-up"></i></a>


    <!-- JavaScript Libraries -->
    <script src="https://code.jquery.com/jquery-3.4.1.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0/dist/js/bootstrap.bundle.min.js"></script>
    <script src="lib/wow/wow.min.js"></script>
    <script src="lib/easing/easing.min.js"></script>
    <script src="lib/waypoints/waypoints.min.js"></script>
    <script src="lib/owlcarousel/owl.carousel.min.js"></script>

    <!-- Template Javascript -->
    <script src="js/main.js"></script>
</body>

</html>