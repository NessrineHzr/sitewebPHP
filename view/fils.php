

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
                <a href="contact.php" class="nav-item nav-link ">Contact</a>
                <a href="compte.php" class="nav-item nav-link">Mon Compte</a>
            </div>
        </div>
    </nav>
    <!-- Navbar End -->
    <br><br><br><br><br>
<center>
    <div class="custom-form-container">
    <form action="../models/fils_user.php" method="post">
        <h2><center>Informations du Fils</center></h2>

        <!-- CIN de la Mère -->
        <div class="form-group">
            <label for="cin_mere">CIN de la Mère:</label>
            <input type="text" id="cin" name="cin" required>
        </div>

        <!-- Prénom du Fils -->
        <div class="form-group">
            <label for="prenom_f">Prénom du Fils:</label>
            <input type="text" id="prenom_f" name="prenom_f" required>
        </div>

        <!-- Date de Naissance du Fils -->
        <div class="form-group">
            <label for="date_naiss_f">Date de Naissance du Fils:</label>
            <input type="date" id="date_naiss_f" name="date_naiss_f" required>
        </div>

        <!-- Genre -->
        <div class="form-group">
    <label>Genre:</label>
    <div style="display: flex; align-items: center;">
        <input type="radio" id="garcon" name="genre" value="M" required>
        <label for="garcon" style="margin-right: 15px;"><b>  Garçon</b></label>
        <input type="radio" id="fille" name="genre" value="F" required>
        <label for="fille"><b>  Fille</b></label>
    </div>
</div>

        <!-- Niveau Scolaire -->
        <div class="form-group">
            <label for="niveau">Niveau Scolaire:</label>
            <select id="niveau" name="niveau" required>
                <option value="" disabled selected>Choisir le Niveau Scolaire</option>
                <option value="1er préparatoire">1er préparatoire</option>
                <option value="2ème préparatoire">2ème préparatoire</option>
                <option value="1er primaire">1er primaire</option>
                <option value="2ème primaire">2ème primaire</option>
                <option value="3ème primaire">3ème primaire</option>
                <option value="4ème primaire">4ème primaire</option>
                <option value="5ème primaire">5ème primaire</option>
                <option value="6ème primaire">6ème primaire</option>
            </select>
        </div>

        <!-- Bouton de soumission -->
        <div class="form-group">
            <input type="submit" value="Envoyer">
        </div>
    </form>
</div>
</center>




    
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
