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
        <a href="index.html" class="navbar-brand d-flex align-items-center px-4 px-lg-5">
            <h2 class="m-0 text-primary"><i class="fa fa-book me-3"></i>Mom&Son</h2>
        </a>
        <button type="button" class="navbar-toggler me-4" data-bs-toggle="collapse" data-bs-target="#navbarCollapse" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
                    <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarCollapse">
            <div class="navbar-nav ms-auto p-4 p-lg-0">
                <a href="index.php" class="nav-item nav-link">Accueil</a>
                <a href="about.php" class="nav-item nav-link">Découvrir</a>
                <a href="courses.php" class="nav-item nav-link">Cours</a>
                <a href="contact.html" class="nav-item nav-link">Contact</a>
            </div>
            <a href="compte.php" class="btn btn-primary py-4 px-lg-5 d-none d-lg-block">Mon Compte<i class="fa fa-arrow-right ms-3"></i></a>
            </div>
    </nav>
    <!-- Navbar End -->


    <!-- Header Start -->
    <div class="container-fluid bg-primary py-5 mb-5 page-header">
        <div class="container py-5">
            <div class="row justify-content-center">
                <div class="col-lg-10 text-center">
                    <h1 class="display-3 text-white animated slideInDown">Mom & Son</h1>
                    <nav aria-label="breadcrumb">
                        <ol class="breadcrumb justify-content-center">
                            <li class="breadcrumb-item"><a class="text-white" href="#">Accueil</a></li>
                            <li class="breadcrumb-item text-white active" aria-current="page">Vidéos Éducatives</li>
                        </ol>
                    </nav>
                </div>
            </div>
        </div>
    </div>
    <!-- Header End -->





    <div class="container mt-5">
        <h2 style="color: hsl(185, 94%, 41%); text-align: center;">Vidéos Éducatives pour Enfants</h2>
        <div class="row">
            <!-- Video 1 -->
            <div class="col-md-4">
                <div class="card mb-4">
                    <img src="https://i.ytimg.com/an_webp/9y5JLftVKCg/mqdefault_6s.webp?du=3000&sqp=CLC42LUG&rs=AOn4CLARkOLV-zBdeB41PLqy5WILDebMUg" class="card-img-top" alt="Video 1">
                    <div class="card-body">
                        <h5 class="card-title">Apprenez les couleurs</h5>
                        <p class="card-text">Apprenez les magnifiques couleurs.</p>
                        <a href="../models/verif_video.php?nom_c=Apprenez+les+couleurs" class="btn btn-primary" target="_blank">Regarder</a>
                    </div>
                </div>
            </div>

            <!-- Video 2 -->
            <div class="col-md-4">
                <div class="card mb-4">
                    <img src="https://i.ytimg.com/an_webp/K_QG3GnuQuY/mqdefault_6s.webp?du=3000&sqp=CKiG2LUG&rs=AOn4CLDIW9QZ1yrV-9i_26B0783WRTapcw" class="card-img-top" alt="Video 2">
                    <div class="card-body">
                        <h5 class="card-title">Apprenez les formes</h5>
                        <p class="card-text">Découvrez les formes de manière amusante.</p>
                        <a href="https://www.youtube.com/watch?v=K_QG3GnuQuY" class="btn btn-primary" target="_blank">Regarder</a>
                    </div>
                </div>
            </div>

            <!-- Video 3 -->
            <div class="col-md-4">
                <div class="card mb-4">
                    <img src="https://i.ytimg.com/an_webp/RUqQDrFZdRk/mqdefault_6s.webp?du=3000&sqp=CP2Q2LUG&rs=AOn4CLCnKpEZktu1vDINiWpX1jYLyiL35A" class="card-img-top" alt="Video 3">
                    <div class="card-body">
                        <h5 class="card-title">Les animaux de la ferme</h5>
                        <p class="card-text">Rencontrez les animaux de la ferme.</p>
                        <a href="https://www.youtube.com/watch?v=RUqQDrFZdRk&pp=ygUhYmFieWZpcnN0IGxlcyBhbmltYXV4IGRlIGxhIGZlcm1l" class="btn btn-primary" target="_blank">Regarder</a>
                    </div>
                </div>
            </div>

            <!-- Video 4 -->
            <div class="col-md-4">
                <div class="card mb-4">
                    <img src="https://i.ytimg.com/an_webp/A9Paav5EJcE/mqdefault_6s.webp?du=3000&sqp=CP6o2LUG&rs=AOn4CLDd-ukL50KPdxKWeBINl1iUUqIwJQ" class="card-img-top" alt="Video 4">
                    <div class="card-body">
                        <h5 class="card-title">Les chiffres magiques</h5>
                        <p class="card-text">Apprenez à compter avec des amis magiques.</p>
                        <a href="https://www.youtube.com/watch?v=A9Paav5EJcE&pp=ygUgYmFieWZpcnN0IGxMZXMgY2hpZmZyZXMgbWFnaXF1ZXM%3D" class="btn btn-primary" target="_blank">Regarder</a>
                    </div>
                </div>
            </div>

            <!-- Video 5 -->
            <div class="col-md-4">
                <div class="card mb-4">
                    <img src="https://i.ytimg.com/vi/aeU_tzzFSnY/hq720.jpg?sqp=-oaymwEcCNAFEJQDSFXyq4qpAw4IARUAAIhCGAFwAcABBg==&rs=AOn4CLA-8DhSPCJENvE3b9HfUiah3tyukg" class="card-img-top" alt="Video 5">
                    <div class="card-body">
                        <h5 class="card-title">Les formes géométriques</h5>
                        <p class="card-text">Apprenez à reconnaître les formes géométriques.</p>
                        <a href="https://www.youtube.com/watch?v=aeU_tzzFSnY&pp=ygUjYmFieWZpcnN0IExlcyBmb3JtZXMgZ8Opb23DqXRyaXF1ZXM%3D" class="btn btn-primary" target="_blank">Regarder </a>
                    </div>
                </div>
            </div>

            <!-- Video 6 -->
            <div class="col-md-4">
                <div class="card mb-4">
                    <img src="https://i.ytimg.com/vi/c9AvxKtMv44/hq720.jpg?sqp=-oaymwEcCNAFEJQDSFXyq4qpAw4IARUAAIhCGAFwAcABBg==&rs=AOn4CLDi1uebVCp9qL5pXKLP8hY-FFVd2Q">
                    <div class="card-body">
                        <h5 class="card-title">Chanson des chiffres</h5>
                        <p class="card-text">Chantez avec les chiffres et amusez-vous !</p>
                        <a href="https://www.youtube.com/watch?v=Z8cvY00TPYM&pp=ygUeYmFieWZpcnN0IENoYW5zb24gZGVzIGNoaWZmcmVz" class="btn btn-primary" target="_blank">Regarder</a>
                    </div>
                </div>
            </div>

            <!-- Video 7 -->
            <div class="col-md-4">
                <div class="card mb-4">
                    <img src="https://i.ytimg.com/an_webp/xvkWHY39L74/mqdefault_6s.webp?du=3000&sqp=CMqx2LUG&rs=AOn4CLCYiCFPBQotBcBRUOPVN7jZcjtGQA" class="card-img-top" alt="Video 7">
                    <div class="card-body">
                        <h5 class="card-title">Les fruits délicieux</h5>
                        <p class="card-text">Apprenez les noms des fruits avec cette vidéo.</p>
                        <a href="https://www.youtube.com/watch?v=xvkWHY39L74&pp=ygUfYmFieWZpcnN0IExlcyBmcnVpdHMgZMOpbGljaWV1eA%3D%3D" class="btn btn-primary" target="_blank">Regarder</a>
                    </div>
                </div>
            </div>

            <!-- Video 8 -->
            <div class="col-md-4">
                <div class="card mb-4">
                    <img src="https://i.ytimg.com/an_webp/IXrBEYSV_K0/mqdefault_6s.webp?du=3000&sqp=CIeh2LUG&rs=AOn4CLDNoZCDqz_5zXHEq_cWasdRpWARuA" class="card-img-top" alt="Video 8">
                    <div class="card-body">
                        <h5 class="card-title">Apprendre les métiers</h5>
                        <p class="card-text">Découvrez les différents métiers.</p>
                        <a href="https://www.youtube.com/watch?v=IXrBEYSV_K0&pp=ygUfYmFieWZpcnN0IEFwcHJlbmRyZSBsZXMgbcOpdGllcg%3D%3D" class="btn btn-primary" target="_blank">Regarder</a>
                    </div>
                </div>
            </div>

            <!-- Video 9 -->
            <div class="col-md-4">
                <div class="card mb-4">
                    <img src="https://i.ytimg.com/vi/Odwg_JPQH7I/hq720.jpg?sqp=-oaymwEcCNAFEJQDSFXyq4qpAw4IARUAAIhCGAFwAcABBg==&rs=AOn4CLCEuQuB3oqLU09ozb6lgwbhBn6IYA" class="card-img-top" alt="Video 9">
                    <div class="card-body">
                        <h5 class="card-title">Les animaux marins</h5>
                        <p class="card-text">Plongez dans l'océan et découvrez les animaux marins.</p>
                        <a href="https://www.youtube.com/watch?v=Odwg_JPQH7I&pp=ygUcYmFieWZpcnN0IExlcyBhbmltYXV4IG1hcmlucw%3D%3D" class="btn btn-primary" target="_blank">Regarder</a>
                    </div>
                </div>
            </div>
        </div>
    </div>


 
        

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