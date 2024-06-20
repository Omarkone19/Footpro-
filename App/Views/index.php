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
    <link href="Assets/css/style.css" rel="stylesheet"/>
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
          <span class="navbar-text mx-auto text-center" style="color: white; font-weight: bold;">Offre spéciale : -20% sur les nouveaux maillots cette semaine !</span>

          <a class="navbar-text mx-5" href="<?= URL ?>" style="color: white;font-weight: bold;">Achetez maintenant</a>
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
    <nav class="navbar navbar-expand-lg navbar-light bg-body-tertiary">
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
                <a class="navbar-brand mt-2 mt-lg-0" href="<?= URL ?>">
                <img
                    src="assets/imgs/Logo/logo.png" 
                    height="100"
                    alt="logo"
                    loading="lazy"
            
                    />
                
                <!-- Left links -->
                    <ul class="navbar-nav ms-auto mb-2 mb-lg-0">
                    <li class="nav-item" style=" font-weight: bold;">
                        <a class="nav-link active" href="<?= URL ?>">Accueil</a>
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
    <form action="search" method="GET" id="search-form">
        <div class="input-group me-3">
            <div class="form-outline" data-mdb-input-init>
                <input id="search-focus" type="search" name="query" class="form-control" />
                <label class="form-label" for="search-focus">Recherche</label>
            </div>
            <button type="submit" class="btn btn-custom" data-mdb-ripple-init>
                <i class="fas fa-search"></i>
            </button>
        </div>
    </form>
</div>

<script>
    document.getElementById('search-form').addEventListener('submit', function() {
        document.getElementById('search-focus').value = '';
    });
</script>


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

   <!-- Carousel -->
    <div id="carouselBasicExample" class="carousel slide carousel-fade" data-mdb-ride="carousel" data-mdb-carousel-init>
        <!-- Indicators -->
        <div class="carousel-indicators">
        <button
            type="button"
            data-mdb-target="#carouselBasicExample"
            data-mdb-slide-to="0"
            class="active"
            aria-current="true"
            aria-label="Slide 1"
        ></button>
        <button
            type="button"
            data-mdb-target="#carouselBasicExample"
            data-mdb-slide-to="1"
            aria-label="Slide 2"
        ></button>
        <button
            type="button"
            data-mdb-target="#carouselBasicExample"
            data-mdb-slide-to="2"
            aria-label="Slide 3"
        ></button>
        </div>
        
        <!-- Inner -->
        <div class="carousel-inner">
        <!-- Single item -->
        <div class="carousel-item active">
            <img src="assets/imgs/Slide/1.png" class="d-block w-100" alt="Sunset Over the City"/>
            <div class="carousel-caption d-none d-md-block">
                <a data-mdb-ripple-init class="btn btn-lg btn-pink" href="<?= URL ?>Equipes" role="button"
                >Commander</a
                >
            </div>
        </div>
    
        <!-- Single item -->
        <div class="carousel-item active">
            <img src="assets/imgs/Slide/1.png" class="d-block w-100" alt="Sunset Over the City"/>
            <div class="carousel-caption d-none d-md-block">
                <a data-mdb-ripple-init class="btn btn-lg btn-pink" href="<?= URL ?>Equipes" role="button"
                >Commander</a
                >
            </div>
        </div>
        
        <!-- Single item -->
        <div class="carousel-item active">
            <img src="assets/imgs/Slide/1.png" class="d-block w-100" alt="Sunset Over the City"/>
            <div class="carousel-caption d-none d-md-block">
                <a data-mdb-ripple-init class="btn btn-lg btn-pink " href="<?= URL ?>Equipes" role="button">Commander</a>
            </div>
            
        </div>
        </div>
        <!-- Inner -->
    
        <!-- Controls -->
        <button class="carousel-control-prev" type="button" data-mdb-target="#carouselBasicExample" data-mdb-slide="prev">
        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
        <span class="visually-hidden">Précédent</span>
        </button>
        <button class="carousel-control-next" type="button" data-mdb-target="#carouselBasicExample" data-mdb-slide="next">
        <span class="carousel-control-next-icon" aria-hidden="true"></span>
        <span class="visually-hidden">Suivant</span>
        </button>
    </div>
   <!-- Carousel -->


   <!-- Titre Catégories -->
   <h1 class="text-center my-3 text-black font-weight-bold ">Catégories les plus populaires</h1>
   <!-- fin -->

   <!-- Catégories --> 
   <div class="container">
    <div class="row">
      <div class="col-md-6 mb-6">
        <a href="<?= URL ?>barcelone">
            <img src="assets/imgs/categories/1.png" alt="" height="350">
        </a>
    </div>
      <div class="col-md-6 mb-6">
        <a href="<?= URL ?>bayern_munich">
          <img src="assets/imgs/categories/2.png" alt="" height="350">
      </a>
      </div>
      
      <div class="col-md-6 mb-6">
        <a href="<?= URL ?>paris_sg">
          <img src="assets/imgs/categories/3.png" alt="" height="350">
      </a>
      </div>
      <div class="col-md-6 mb-6">
        <a href="<?= URL ?>real_madrid">
          <img src="assets/imgs/categories/4.png" alt="" height="350">
      </a>
      </div>
    </div>
  </div>
  <!-- fin -->
  
  <!-- Titre Vintage -->
  <h1 class="text-center my-3 text-black font-weight-bold ">Maillot Vintage</h1>
  <!-- fin -->
  
   <!-- Vintage --> 
   <div class="container">
    <div class="row">
      <div class="col-md-6 mb-6">
        <h1 class=" my-3 text-black font-weight-bold " style="text-align: left; font-style: italic; font-family: 'Franklin Gothic Medium', 'Arial Narrow', Arial, sans-serif;">Maillot Vintage PSG “Épopée Légendaire”</h1>
        <p style=" text-align: left;font-family: 'Times New Roman', Times, serif;">
            Découvrez l'essence même du Paris Saint-Germain avec notre collection de maillots vintage Plongez dans l'histoire riche et palpitante du club de la
            capitale française avec ces pièces emblématiques qui célèbrent les grandes épopées du PSG</p> <br>
            
            <a  class="btn-pink btn-outline-light btn-lg" href="<?= URL ?>vintage" role="button" style="color: white;">Détail</a>
      </div>

      <div class="col-md-6 mb-6">
        <img src="assets/imgs/Vintage/image-2@2x.png" alt="" height="400">
      </div>
      
    </div>
  </div>
  <!-- fin -->

    <!-- Titre Maillots -->
    <h1 class="text-center my-3 text-black font-weight-bold ">Maillots</h1>
    <p style=" text-align: center;font-family: 'Times New Roman', Times, serif;">
        " Faites-vous remarquer sur le terrain comme dans les tribunes."</p>
    <!-- fin -->

    <!--maillots-->
    <div class="container">
        <div id="carouselMultiItemExample" class="carousel slide carousel-dark text-center" data-mdb-ride="carousel">
            <div class="carousel-inner py-4">
                <div class="carousel-item active">
                  <div class="row row-cols-2 row-cols-md-5 g-4 justify-content-center">
                    <div class="col">
                     <a href="<?= URL ?>juventus">
                      <img src="assets/imgs/Maillot/1.png" class="img-fluid mx-auto d-block" alt="Placeholder">
                    </a>
                    </div>
                    <div class="col">
                     <a href="<?= URL ?>dortmund">
                      <img src="assets/imgs/Maillot/2.png" class="img-fluid mx-auto d-block" alt="Placeholder">
                    </a>
                    </div>
                    <div class="col">
                      <a href="<?= URL ?>manchester_united">
                      <img src="assets/imgs/Maillot/3.png" class="img-fluid mx-auto d-block" alt="Placeholder">
                    </a>
                    </div>
                    <div class="col">
                      <a href="<?= URL ?>real_madrid">
                        <img src="assets/imgs/Maillot/4.png" class="img-fluid mx-auto d-block" alt="Placeholder">
                      </a>
                      </div>
                    <div class="col">
                      <a href="<?= URL ?>manchester_city">
                      <img src="assets/imgs/Maillot/5.png" class="img-fluid mx-auto d-block" alt="Placeholder">
                    </a>
                    </div>
                  </div>
                </div>
               
            <div class="row justify-content-end">
                <div class="col-md-1 mb-1">
                  <button class="carousel-button" type="button" data-mdb-target="#carouselMultiItemExample" data-mdb-slide="prev">
                    <span class="fas fa-chevron-left" aria-hidden="true" ></span>
                    <span class="carousel-control-prev-text visually-hidden">Previous</span>
                  </button>
                </div>
                <div class="col-md-1 mb-1">
                  <button class="carousel-button" type="button" data-mdb-target="#carouselMultiItemExample" data-mdb-slide="next">
                    <span class="fas fa-chevron-right" aria-hidden="true"></span>
                    <span class="carousel-control-next-text visually-hidden">Next</span>
                  </button>
                </div>
            </div>
              
            <a  class="btn-pinki btn-outline-light btn-lg" href="#!" role="button" style="color: white;">Voir tous les produits</a>
        </div>
    </div>
    <!--fin-->

    <!--Testmonia-->
    <h2 class="text-center mb-3 mt-5">Témoignages de nos Clients Satisfaits</h2>

    <section class="testimonials-section" style="background-color: #e1e1e1;">
        
        <div class="container py-5">
          
          <div id="testimonialCarousel" class="carousel slide" data-mdb-ride="carousel">
            <div class="carousel-inner">
              <div class="carousel-item active">
                <div class="row justify-content-center">
                  <div class="col-lg-4 mb-5">
                    <div class="testimonial-item text-center">
                      <a href="votre_page_cible.html">
                        <a href="votre_page_cible.html">
                          <img src="assets/imgs/Testmonia/photo-1513440403590-8aefecf84d3e.avif" class="rounded-circle mb-3" alt="Client Image" width="185" height="185">
                      </a>
                                          </a>
                    
                      <p class="mb-3">Maillot Real Madrid :
                        "Incroyable! Le maillot du Real Madrid est fidèle au club et de grande qualité."
                      <div class="rating">
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="far fa-star"></i>
                      </div>
                    </div>
                  </div>
      
                  <div class="col-lg-4 mb-5">
                    <div class="testimonial-item text-center">
                      <img src="assets/imgs/Testmonia/photo-1477118476589-bff2c5c4cfbb.avif"  class="rounded-circle mb-3" alt="Client Image" width="185" height="185">
                      <p class="mb-3">Maillot PSG :
                        Maillot PSG :
                        "Super maillot! Mon fils l'adore, et la livraison a été rapide."
                      <div class="rating">
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="far fa-star"></i>
                      </div>
                    </div>
                  </div>
      
                  <div class="col-lg-4 mb-5">
                    <div class="testimonial-item text-center">
                      <img src="assets/imgs/Testmonia/photo-1509670572852-5823184def8c.avif" class="rounded-circle mb-3" alt="Client Image" width="185" height="185">
                      <p class="mb-3">Maillot Barcelone :
                        "Moderne et élégant. Un must pour tous les fans du Barça."</p>
                      <div class="rating">
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="far fa-star"></i>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
              <div class="carousel-item">
                <div class="row justify-content-center">
                  <div class="col-lg-4 mb-5">
                    <div class="testimonial-item text-center">
                      <img src="assets/imgs/Testmonia/photo-1484517186945-df8151a1a871.avif" class="rounded-circle mb-3" alt="Client Image" width="185" height="185">
                      <p class="mb-3">Maillot Manchester City :
                        "Génial! Confortable et livraison rapide. Je le recommande vivement!""</p>
                      <div class="rating">
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="far fa-star"></i>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
      
            <button class="carousel-control-prev" type="button" data-mdb-target="#testimonialCarousel" data-mdb-slide="prev">
              <span class="carousel-control-prev-icon" aria-hidden="true"></span>
              <span class="visually-hidden">Précédent</span>
            </button>
      
            <button class="carousel-control-next" type="button" data-mdb-target="#testimonialCarousel" data-mdb-slide="next">
              <span class="carousel-control-next-icon" aria-hidden="true"></span>
              <span class="visually-hidden">Suivant</span>
            </button>
      
            <div class="carousel-indicators">
                <span data-mdb-target="#testimonialCarousel" data-mdb-slide-to="0" class="indicator active" aria-current="true" aria-label="Slide 1"></span>
                <span data-mdb-target="#testimonialCarousel" data-mdb-slide-to="1" class="indicator" aria-label="Slide 2"></span>
            </div>
              
          </div>
          <p class="row justify-content-center">Votres satisfaction est notre meilleure récompense</p>
        </div>
        
    </section>
    <!--fin-->
    
    <!--bar footer-->
    <section class="py-5 mt-5">
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