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
                <a href="courses.php" class="nav-item nav-link">Cours</a>
                <a href="contact.php" class="nav-item nav-link ">Contact</a>

                <div class="nav-item dropdown">
                <a href="#" class="nav-link dropdown-toggle" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                    Mon Compte
                </a>
                <ul class="dropdown-menu" aria-labelledby="navbarDropdown" style="background-color: #f8f9fa; border: 1px solid #ddd; border-radius: 0.25rem;">
                    <li><a class="dropdown-item" href="info_compte.php" style="color: #007bff;">Mes Informations</a></li>
                    <li><a class="dropdown-item" href="../view/fils.php" style="color: #007bff;">Enregistrer Votre Fils</a></li>
                    <li><a class="dropdown-item" href="pdf_info.php" style="color: #007bff;">Télécharger les Activités de Votre Fils</a></li>
                    <li><a class="dropdown-item" href="stat_cours.php" style="color: #007bff;">Statistiques de Cours Étudiés</a></li>
                </ul>
            </div>

                <a href="../models/logout.php" class="btn btn-primary py-4 px-lg-5 d-none d-lg-block">Déconnexion</a> 
            </div>
        </div>
    </nav>
    <!-- Navbar End -->
<br>
<br>

<div class="container mt-5">
    <h2 style="color: hsl(185, 94%, 41%); text-align: center;">Bienvenue dans l'Espace Éducation pour votre Enfant</h2><br><br>
    <div class="row">
        <div class="col-lg-8 mx-auto">
            <div class="card p-4 mb-4 shadow-sm" style="background-color: #f8f9fa; border-radius: 10px;">
                <img src="img/ddd.jpg" class="card-img-top mb-3" alt="Éducation des enfants" style="border-radius: 10px;">
                <div class="card-body">
                    <p style="font-size: 1.2em; color: #333;">
                    En tant que parent, vous avez fait un grand pas vers un apprentissage personnalisé pour votre enfant. L'accompagnement à travers des techniques créatives et engageantes est essentiel pour assurer un parcours éducatif enrichissant. 
                    Encourager votre enfant à adopter des méthodes d'apprentissage innovantes, telles que la création de schémas, de cartes mentales ou de dessins, facilitera la mémorisation et rendra les leçons plus accessibles et agréables. 
                    Prenez le temps de travailler ensemble, car ces moments sont cruciaux dans le processus d'apprentissage.<br>

                    <h4>« Le secret du succès : Qualité et Créativité » <br>  Paul Bocuse</h4><br></p>
                    <p style="font-size: 1.2em; color: #333;">
                        En utilisant cet espace, vous pouvez aider votre enfant à explorer une variété de ressources éducatives. Les <strong>cours éducatifs</strong> fournissent une base solide et structurée, essentielle pour la compréhension des concepts fondamentaux. 
                        Les <strong>vidéos éducatives</strong> rendent l'apprentissage interactif et visuel, renforçant ainsi l'engagement et la rétention des connaissances. Les <strong>jeux éducatifs</strong> offrent une approche ludique, permettant à votre enfant d'apprendre en s'amusant. 
                        Enfin, les <strong>histoires</strong> stimulent l'imagination et développent le vocabulaire, tout en enseignant des valeurs importantes à travers des récits captivants.
                    </p>
                </div>
            </div>
        </div>
    </div>
</div>


<h2 style="color: hsl(185, 94%, 41%); text-align: center;">Vous Pouvez Commencer Les Cours</h2><br><br>

  <!-- Service Start -->
  <div class="container-xxl py-5">
        <div class="container">
            <div class="row g-4">
                <div class="col-lg-3 col-sm-6 wow fadeInUp" data-wow-delay="0.1s">
                    <div class="service-item text-center pt-3">
                        <div class="p-4">                            
                        <i class="fa fa-3x fa-graduation-cap text-primary mb-4"></i>
                            <h5 class="mb-3"><a href="cours.php">Cours et Exercices Éducatifs</a></h5>
                            <p>Découvrons ensemble des cours enrichissants et des exercices stimulants pour un apprentissage complet.</p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-sm-6 wow fadeInUp" data-wow-delay="0.3s">
                    <div class="service-item text-center pt-3">
                        <div class="p-4">
                        <i class="fa fa-3x fa-tv text-primary mb-4"></i>
                            <h5 class="mb-3"><a href="video.php">Vidéos Éducatives</a></h5>
                            <p>Découvrons ensemble des vidéos éducatives fascinantes à travers l'apprentissage visuel.</p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-sm-6 wow fadeInUp" data-wow-delay="0.5s">
                    <div class="service-item text-center pt-3">
                        <div class="p-4">
                        <i class="fa fa-3x fa-gamepad text-primary mb-4"></i>
                            <h5 class="mb-3"><a href="jeux.php">Jeux Éducatifs</a></h5>
                            <p>Découvrons ensemble des jeux éducatifs passionnants à travers l'apprentissage.</p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-sm-6 wow fadeInUp" data-wow-delay="0.7s">
                    <div class="service-item text-center pt-3">
                        <div class="p-4">
                            <i class="fa fa-3x fa-book-open text-primary mb-4"></i>
                            <h5 class="mb-3"><a href="histoire.php">Bibliothèque d’Histoire</a></h5>
                            <p>Découvrons ensemble de magnifiques histoires à travers la lecture.</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div><br><br>
    <!-- Service End -->



    
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
