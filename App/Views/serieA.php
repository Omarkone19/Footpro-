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
                <a class="navbar-brand mt-2 mt-lg-0"  href="<?= URL ?>Accueil">
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
            <!-- Right elements -->
            </div>
            <!-- Container wrapper -->
    </nav>
    <!-- Navbar -->

    <!--  image -->
    <div>
        <img src="assets/imgs/produits/serieA/image 69.png" class="img-fluid" alt="Wild Landscape" /> 
    </div>
    <!--  image -->

    <section class="d-flex justify-content-center justify-content-lg-between p-4 " style="color: black;">
        <!-- head -->
        <div class="me-5 d-none d-lg-block">
          <h5> <a href="Accueil"><span style="color: #db4444;">Accueil</span></a>/ <a href="Equipes"><span style="color: #db4444;">Équipes</span>/ <a href="serie_a" style="color: #db4444;">Serie A</a> 
        </div>
        <!-- fin -->
    </section>

    <div class="text-center">
        <h1 class="mb-3">Maillot de football des clubs</br> de Serie A italiennes</h1>
<!--         <h4 class="mb-3"> </h4> -->
       <p> </p> <br>
       <p> Les <a href=""><span style="color: #db4444;">maillots de football </span></a> des clubs de la Serie A sont répertoriés dans cette catégorie : <a href="juventus"><span style="color: #db4444;">Juventus</span></a>,<a href="ac_milan"><span style="color: #db4444;">AC Milan</span></a>,<a href="Naples"><span style="color: #db4444;">Naples</span></a><a href=""><span style="color: #db4444;"></span></a>,<a href=""><span style="color: #db4444;">...</span></a></p>
     </div>



   <!-- Catégories --> 
   <div class="container">

    <!--4 de haut-->
    <div class="row">
      <div class="position-relative col-md-3 mb-4">
        <a href="inter_milan"><img src="assets/imgs/produits/serieA/image 53.png" alt="" height="250"> 
          <button class="btn btn-dark position-absolute bottom-0 start-0" style="padding: 10px 30px; margin-left: 15px; margin-bottom: 10px; border-radius: 50px;">Inter Milan</button>
        </a>
        
      </div>
      <div class="position-relative col-md-3 mb-4">
        <a href="juventus"><img src="assets/imgs/produits/serieA/image 55.png" alt="" height="250">
          <button class="btn btn-dark position-absolute bottom-0 start-0" style="padding: 10px 30px; margin-left: 15px; margin-bottom: 10px; border-radius: 50px;">Juventus</button>
        </a>
      </div>
      <div class="position-relative col-md-3 mb-4">
        <a href="lazio_rome"><img src="assets/imgs/produits/serieA/image 56.png" alt="" height="250">
          <button class="btn btn-dark position-absolute bottom-0 start-0" style="padding: 10px 30px; margin-left: 15px; margin-bottom: 10px; border-radius: 50px;">Lazio Rome</button>
        </a>
      </div>
      <div class="position-relative col-md-3 mb-4">
        <a href="ac_milan"><img src="assets/imgs/produits/serieA/image 58.png" alt="" height="250">
          <button class="btn btn-dark position-absolute bottom-0 start-0" style="padding: 10px 30px; margin-left: 15px; margin-bottom: 10px; border-radius: 50px;">Milan AC</button>
        </a>
      </div>
    </div>

    <!--4 de bas-->
    <div class="row">
      <div class="position-relative col-md-3 mb-4">
        <a href="Naples"><img src="assets/imgs/produits/serieA/image 59.png" alt="" height="250">
          <button class="btn btn-dark position-absolute bottom-0 start-0" style="padding: 10px 30px; margin-left: 15px; margin-bottom: 10px; border-radius: 50px;">Naples</button>
        </a>
      </div>
      <div class="position-relative col-md-3 mb-4">
        <a href="atalanta_bergame"><img src="assets/imgs/produits/serieA/image 61.png" alt="" height="250">
          <button class="btn btn-dark position-absolute bottom-0 start-0" style="padding: 10px 30px; margin-left: 15px; margin-bottom: 10px; border-radius: 50px;">Atlanta</button>
        </a>
      </div>
      <div class="position-relative col-md-3 mb-4">
        <a href="as_roma"><img src="assets/imgs/produits/serieA/image 63.png" alt="" height="250">
          <button class="btn btn-dark position-absolute bottom-0 start-0" style="padding: 10px 30px; margin-left: 15px; margin-bottom: 10px; border-radius: 50px;">As Roma</button>
        </a>
      </div>
      <div class="position-relative col-md-3 mb-4">
        <a href="florentina"><img src="assets/imgs/produits/serieA/image 65.png" alt="" height="250">
          <button class="btn btn-dark position-absolute bottom-0 start-0" style="padding: 10px 30px; margin-left: 15px; margin-bottom: 10px; border-radius: 50px;">Florentina</button>
        </a>
      </div>
    </div>

   </div>
   <!-- fin -->
  

    <!--produits-->
    <section class="py-5">
            <div class="container">
              <div class="row " style="color: black;">
                <h1 class="mb-3">Serie A: le championnat élite du football italien masculin.</h1>
                <p>

                    La Serie A est le championnat professionnel de football où le niveau est le plus relevé d'italle.<br><br>
                    
                    La Serie A est composée de 20 équipes italiennes s'affrontant en matchs aller et retour d'août à mai-juin.<br><br>
                    
                    Le championnat est composé de 38 Journées pour que les 20 clubs puissent affronter tous les autres clubs à 2 reprises, une fois à domicile dans son stade et une fois à l'extérieur dans le stade de l'équipe adverse.<br><br>
                    
                    La FIGC-Lega Serie A organise ce championnat de Serie A depuis sa création en 1898. Tous les clubs présents dans ce championnat sont professionnels.<br><br>
                    
                    Les trois clubs finissant à la 18ème, 19ème et 20ème place du championnat sont automatiquement relégués en division inférieure, en Serie B.<br><br>
                    
                    Pour ce qui est du haut du classement, le 1er du classement remporte le titre de Champion d'italie appelé Scudetto et les clubs en 2ème, 3ème, 4ème et Sème place peuvent prétendre à une qualification en coupes européennes, que sont la Ligue des Champions et la Ligue Europa.<br><br>
                    
                    De grands clubs se partagent régulièrement ces premières places et luttent chaque saison pour remporter le titre nationale suprême.<br><br>
                    
                    Pour beaucoup d'amateurs de football, la Serie A est le championnat de football le plus tactique au monde.<br><br>
                    
                    Connu pour leurs rigueurs tactiques dans les phases offensives et surtout défensives, les clubs italiens se livrent de réelles batailles toute la saison en championnat pour finir à la meilleure place possible.<br><br>
                    
                    Le championnat italien est l'un des plus suivis au monde. Longtemps considéré comme le meilleur championnat du monde, notamment dans les années 1990 et 2000, le championnat est un peu moins en vue en ce moment, contrairement à la Premier League ou la Liga.<br><br>
                    
                    Beaucoup de clubs italiens semblent aujourd'hui en retard sur d'autres clubs européens, en terme de rénovation, d'infrastructures,...<br><br>
                    
                    Le retour de la Serie A au top passera probablement par cette modernisations.<br><br>
                    
                    Le championnat italien occupe aujourd'hui la 4ème place au classement UEFA des meilleurs championnats de football d'Europe.<br><br>
                    
                    A la lutte avec la Bundesliga en Jeme position et devant la Ligue 1 a la Seme place.<br><br>
                    
                    Au cours de t'histoire de ce championnat, plusieurs grands clubs italiens ont su se distinguer de par leurs titres et leurs performances sur le terrain</p>
              </div>
            </div>
    </section>
    <!--fin-->

    <!--  image -->
    <div class="text-center" >
      <img src="assets/imgs/produits/serieA/image 66.png" class="img-fluid" alt="Wild Landscape" /> 
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
            <span>Get connected with us on social networks:</span>
        </div>
        <!-- Left -->
    
        <!-- Right -->
        <div>
            <a href="" class="me-4 text-reset">
            <i class="fab fa-facebook-f"></i>
            </a>
            <a href="" class="me-4 text-reset">
            <i class="fab fa-twitter"></i>
            </a>
            <a href="" class="me-4 text-reset">
            <i class="fab fa-google"></i>
            </a>
            <a href="" class="me-4 text-reset">
            <i class="fab fa-instagram"></i>
            </a>
            <a href="" class="me-4 text-reset">
            <i class="fab fa-linkedin"></i>
            </a>
            <a href="" class="me-4 text-reset">
            <i class="fab fa-github"></i>
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
                            <input type="email" class="form-control" placeholder="Enter your email" aria-label="Enter your email" aria-describedby="button-addon2">
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