<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- Font Awesome -->
    <link
    href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css"
    rel="stylesheet"
    />
    <!-- Google Fonts -->
    <link
    href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700&display=swap"
    rel="stylesheet"
    />
    <!-- MDB -->
    <link
    href="https://cdnjs.cloudflare.com/ajax/libs/mdb-ui-kit/7.2.0/mdb.min.css"
    rel="stylesheet"
    />
    <!--Style-->
    <link href="assets/css/style.css" rel="stylesheet"/>
    <!--font-->
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Roboto:400,700&display=swap">

    <link
        rel="stylesheet"
        href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;500;600;700;800&display=swap"
    />
    <link
        rel="stylesheet"
        href="https://fonts.googleapis.com/css2?family=Helvetica:wght@400&display=swap"
    />
    <link
        rel="stylesheet"
        href="https://fonts.googleapis.com/css2?family=Inter:wght@700&display=swap"
    />
    <link
        rel="stylesheet"
        href="https://fonts.googleapis.com/css2?family=Actor:wght@400&display=swap"
    />
    <title>Football</title>
  </head>
  <body>

    <!-- ban top -->
    <nav class="navbar  navbar-light" style="background-color: #db4444;">
        <div class="container-fluid justify-content-center">
          <span class="navbar-text mx-auto" style="color: white; font-weight: bold;">Offre spéciale : -20% sur les nouveaux maillots cette semaine !</span>
          <a class="navbar-text mx-5" href="#" style="color: white;font-weight: bold;">Achetez maintenant</a>
          <div class="dropdown ml-auto">
                <a
                    data-mdb-dropdown-init
                    class="nav-link dropdown-toggle"
                    href="#"
                    id="navbarDropdownMenuLink"
                    role="button"
                    aria-expanded="false"
                    style="color: white; font-weight: bold;"
                >
                    Langue 
                </a>
            <ul class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
                <li>
                <a class="dropdown-item" href="#">Français</a>
                </li>
                <li>
                <a class="dropdown-item" href="#">Englais</a>
                </li>
               
            </ul>
          </div>
          
        </div>
    </nav>   
    <!-- fin ban top -->   

    <!-- Navbar -->
    <nav class="navbar navbar-expand-lg navbar-light bg-body-tertiary fixed-top">
     
      <!-- Container wrapper -->
            <div class="container-fluid">
            <!-- Toggle button -->
            <button
            data-mdb-collapse-init
            class="navbar-toggler"
            type="button"
            data-mdb-target="#navbarRightAlignExample"
            aria-controls="navbarRightAlignExample"
            aria-expanded="false"
            aria-label="Toggle navigation"
            >
              <i class="fas fa-bars"></i>
           </button>
        
            <!-- Collapsible wrapper -->
            <div class="collapse navbar-collapse" id="navbarRightAlignExample">
                <!-- Navbar brand -->
                <a class="navbar-brand mt-2 mt-lg-0" href="<?= URL ?>Accueil">
                <img
                    src="assets/imgs/Logo/logo.png"
                    height="100"
                    alt="logo"
                    loading="lazy"
                />
                </a>
                <!-- Left links -->
                <ul class="navbar-nav ms-auto mb-2 mb-lg-0">
                    <li class="nav-item" style=" font-weight: bold;">
                        <a class="nav-link active" href="<?= URL ?>Accueil">Accueil</a>
                    </li>
                    <li class="nav-item" style=" font-weight: bold;">
                        <a class="nav-link" href="<?= URL ?>Equipes">ÉQUIPES</a>
                    </li>
                    <li class="nav-item" style=" font-weight: bold;">
                        <a class="nav-link" href="<?= URL ?>enfants">ENFANT</a>
                    </li>
                    <li class="nav-item" style=" font-weight: bold;">
                        <a class="nav-link" href="<?= URL ?>vintage">VINTAGE</a>
                    </li>
                    <li class="nav-item" style=" font-weight: bold;">
                        <a class="nav-link" href="#">PROMOS</a>
                    </li>
                </ul>
                <!-- Left links -->
            </div>
            <!-- Collapsible wrapper -->
        
            <!-- Right elements -->
            <div class="d-flex align-items-center">
                <!-- Search-->
                <div class="input-group me-3">
                    <div class="form-outline" data-mdb-input-init>
                      <input id="search-focus" type="search" id="form1" class="form-control" />
                      <label class="form-label" for="form1">Recherche</label>
                    </div>
                    <button type="button" class="btn btn-custom" data-mdb-ripple-init>
                      <i class="fas fa-search"></i>
                    </button>
                </div>

               <!-- heart -->
               <a class="link-secondary me-3" href="<?= URL ?>connexion">
                <i class="fa-solid fa-user"></i>
              </a>

                <!-- Icon -->
                <a class="link-secondary me-3" href="<?= URL ?>Panier">
                <i class="fas fa-shopping-cart"></i>
                </a>
            </div>
            <!-- Right elements -->
            </div>
            <!-- Container wrapper -->
    </nav>
    <!-- Navbar -->

    <!--  image -->
    <div>
        <img src="assets/imgs/produits/encour/image 1.png" class="img-fluid" alt="Wild Landscape" /> 
    </div>
    <!--  image -->

    <section class="d-flex justify-content-center justify-content-lg-between p-4 " style="color: black;">
        <!-- head -->
        <div class="me-5 d-none d-lg-block">
          <h5> <a href="<?= URL ?>Accueil"><span style="color: #db4444;">Accueil</span></a>/ Equipe /<a href="" style="color: black;"></a>  <a href="" style="color: black;"><!--un truc au bon vouloir--></a>  <a href=""><span style="color: #db4444;"><!--un truc au bon vouloir--></span></a> </h5>
        </div>
        <!-- fin -->
    </section>

    <div class="text-center">
        <h1 class="mb-3">Maillot de football des clubs</h1>
<!--         <h4 class="mb-3"> </h4> -->
       <p> </p> <br>
       <p> Les <a href=""><span style="color: #db4444;"><!--vide--></span></a> Retrouve tous les maillot de football des plus grand clubs pour la saison 2023/2024 sur <a href=""><span style="color: #db4444;">FootPro</span></a></p>
     </div>



   <!-- Logo équipes --> 
   <div class="container">
    <div class="row">
      <div class="col-md-6 mb-6 text-center">
        <a href="<?= URL ?>premier_league"><img src="assets/imgs/produits/encour/image 22.png" alt="" height="350"></a>
      </div>
      <div class="col-md-6 mb-6">
        <a href="<?= URL ?>laliga"><img src="assets/imgs/produits/encour/image 23.png" alt="" height="350"></a>
      </div>
      <div class="col-md-6 mb-6">
        <a href="<?= URL ?>serie_a"><img src="assets/imgs/produits/encour/image 16.png" alt="" height="350"></a>
      </div>
      <div class="col-md-6 mb-6">
        <a href="<?= URL ?>ligue_1"><img src="assets/imgs/produits/encour/image 24.png" alt="" height="350"></a>
      </div>
      <div class="col-md-6 mb-6 text-center">
        <a href="<?= URL ?>bundesliga"><img src="assets/imgs/produits/encour/image 34.png" alt="" height="350"></a>
      </div>
    </div>
  </div>
  


    <!--  image -->
    <div class="text-center py-5" >
      <img src="assets/imgs/produits/encour/Image.png" class="img-fluid" alt="Wild Landscape" /> 
    </div>
    <!--  image -->



    <!--bar footer-->
    <section class="py-5 mt-2">
        <div class="container">
          <div class="row">
            <div class="col-md-4">
              <div class="text-center">
                <i class="fas fa-shipping-fast fa-2x rounded-circle mb-3 icon-circle" style="background-color: #e1e1e175;"></i>
                <h6 class="mb-0">LIVRAISON GRATUITE ET RAPIDE</h6>
                <p class="mb-0">Livraison gratuite pour toute commande supérieure à 100€</p>
              </div>
            </div>
            <div class="col-md-4">
              <div class="text-center">
                <i class="fas fa-headset fa-2x rounded-circle mb-3 icon-circle" style="background-color: #e1e1e175;"></i>
                <h6 class="mb-0">SERVICE CLIENT 24h/24 et 7j/7</h6>
                <p class="mb-0">Support client convivial 24h/24 et 7j/7</p>
              </div>
            </div>
            <div class="col-md-4">
              <div class="text-center">
                <i class="fas fa-money-bill fa-2x rounded-circle mb-3 icon-circle" style="background-color: #e1e1e175;"></i>
                <h6 class="mb-0">GARANTIE DE REMBOURSEMENT</h6>
                <p class="mb-0">Remboursement garanti si vous n'êtes pas satisfait</p>
              </div>
            </div>
          </div>
        </div>
    </section>
      
    <!--fin-->
   
    <!-- Footer -->
    <footer class="text-center text-lg-start text-muted" style="background-color: black;">
        <!-- Section: Social media -->
        <section class="d-flex justify-content-center justify-content-lg-between p-4 border-bottom" style="color: white;">
        <!-- Left -->
        <div class="me-5 d-none d-lg-block">
            <span>Rejoignez-nous sur les réseaux sociaux :</span>
        </div>
        <!-- Left -->
    
        <!-- Right -->
        <div>
            <a href="https://www.facebook.com/" class="me-4 text-reset">
            <i class="fab fa-facebook-f"></i>
            </a>
            <a href="https://twitter.com/?lang=fr" class="me-4 text-reset">
            <i class="fab fa-x"></i>
            </a>
            <a href="https://www.google.com/intl/fr/gmail/about/" class="me-4 text-reset">
            <i class="fab fa-google"></i>
            </a>
            <a href="https://www.instagram.com/" class="me-4 text-reset">
            <i class="fab fa-instagram"></i>
            </a>
            
        </div>
        <!-- Right -->
        </section>
        <!-- Section: Social media -->
    
        <!-- Section: Links  -->
        <section class=" text-white py-5" style="background-color: black;">
            <div class="container-fluid">
            <div class="row">
                <div class="col-md-3 col-lg-4 col-xl-2 mx-auto mb-4">
                <h6 class="text-uppercase fw-bold mb-4">A PROPOS DE</h6>
                <p><a href="#!" class="text-reset">Qui sommes-nous ?</a></p>
                <p><a href="#!" class="text-reset">Conditions générales de vente</a></p>
                <p><a href="#!" class="text-reset">Mentions légales</a></p>
                </div>
        
                <div class="col-md-2 col-lg-2 col-xl-2 mx-auto mb-4">
                <h6 class="text-uppercase fw-bold mb-4">NOS SERVICES</h6>
                <p><a href="#!" class="text-reset">Paiement</a></p>
                <p><a href="#!" class="text-reset">Livraison</a></p>
                <p><a href="#!" class="text-reset">Retour</a></p>
                <p><a href="#!" class="text-reset">Personnalisation produit</a></p>
                </div>
        
                <div class="col-md-3 col-lg-2 col-xl-2 mx-auto mb-4">
                <h6 class="text-uppercase fw-bold mb-4">BESOIN D’AIDE ?</h6>
                <p><a href="#!" class="text-reset">Guide d’entretien maillots</a></p>
                <p><a href="#!" class="text-reset">Comment choisir sa taille?</a></p>
                <p><a href="#!" class="text-reset">Guide des tailles</a></p>
                <p><a href="#!" class="text-reset">Questions fréquentes</a></p>
                </div>
        
                <div class="col-md-4 col-lg-3 col-xl-3 mx-auto mb-md-0 mb-4">
                <div class="text-center text-md-start">
                    <h2 class="mb-4">S'abonner à la newsletter</h2>
                    <p>Recevez nos offres exclusives en avant-première</p>
                    <form>
                    <div class="row">
                        <div class="col-md-6">
                        <div class="input-group mb-2">
                            <input type="email" class="form-control" placeholder="adresse email" aria-label="Enter your email" aria-describedby="button-addon2">
                            <button class="btn btn-primary" type="button" id="button-addon2">go</button>
                        </div>
                        
                        </div>
                    </div>
                    </form>
                </div>
                </div>
            </div>
            <div style="padding-left: 60%;">
                <span>Obtenez 10% de réduction sur votre première commande</span>
            </div>
            </div>
        </section>

        <!-- Section: Links  -->
    
        <!-- Copyright -->
        <div class="text-center p-4" style="background-color: rgba(243, 243, 243, 0.05); color: white;">
            <img class="icon-copyright" alt="" src="assets/imgs/footer/iconcopyright.svg">   Copyright FOOTPRO2024. All right reserved      <a class="text-reset fw-bold" href="#"></a>
        </div>
        <!-- Copyright -->
    </footer>
   <!-- Footer -->

    <!-- MDB -->
    <script
    type="text/javascript"
    src="https://cdnjs.cloudflare.com/ajax/libs/mdb-ui-kit/7.2.0/mdb.umd.min.js"
    ></script>
  </body>
</html>