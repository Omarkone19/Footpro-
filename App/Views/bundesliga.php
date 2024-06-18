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
            </div>
            <!-- Right elements -->
            </div>
            <!-- Container wrapper -->
    </nav>
    <!-- Navbar -->

    <!--  image -->
    <div>
        <img src="assets/imgs/produits/liste/bundesliga.png" class="img-fluid" alt="Wild Landscape" /> 
    </div>
    <!--  image -->

    <section class="d-flex justify-content-center justify-content-lg-between p-4 " style="color: black;">
        <!-- head -->
        <div class="me-5 d-none d-lg-block">
          <h5> <a href="Accueil"><span style="color: #db4444;">Accueil</span></a>/ <a href="Equipes"><span style="color: #db4444;">Équipes</span>/ <a href="bundesliga" style="color: #db4444;;">Bundesliga</a>
        </div>
        <!-- fin -->
    </section>

    <div class="text-center">
        <h1 class="mb-3">Maillot de football des clubs de</br> Bundesliga  Allemangne</h1>
<!--         <h4 class="mb-3"> </h4> -->
       <p> </p> <br>
       <p> Les <a href=""><span style="color: #db4444;">maillots de football </span></a> des clubs de Bundesliga sont répertoriés dans cette catégorie : <a href="bayern_munich"><span style="color: #db4444;">Bayern Munich</span></a><a href=""><span style="color: #db4444;"> ou</span></a><a href=""><span style="color: #db4444;"> le </span></a><a href="RB_leipzig"><span style="color: #db4444;">Leipzeg RB</span></a>,<a href=""><span style="color: #db4444;">...</span></a></p>
     </div>



   <!-- Catégories --> 
   <div class="container">

    <!--4 de haut-->
    <div class="row">
      <div class="position-relative col-md-3 mb-4">
        <a href="bayern_munich"><img src="assets/imgs/produits/bundesliga/image 70.png" alt="" height="250"> 
          <button class="btn btn-dark position-absolute bottom-0 start-0" style="padding: 10px 30px; margin-left: 15px; margin-bottom: 10px; border-radius: 50px;">Bayern Munich</button>
        </a>
        
      </div>
      <div class="position-relative col-md-3 mb-4">
        <a href="dortmund"><img src="assets/imgs/produits/bundesliga/image 71.png" alt="" height="250">
          <button class="btn btn-dark position-absolute bottom-0 start-0" style="padding: 10px 30px; margin-left: 15px; margin-bottom: 10px; border-radius: 50px;">Dortmund</button>
        </a>
      </div>
      <div class="position-relative col-md-3 mb-4">
        <a href="Eintract_Frankfurt"><img src="assets/imgs/produits/bundesliga/image 80.png" alt="" height="250">
          <button class="btn btn-dark position-absolute bottom-0 start-0" style="padding: 10px 30px; margin-left: 15px; margin-bottom: 10px; border-radius: 50px;">Franckfort</button>
        </a>
      </div>
      <div class="position-relative col-md-3 mb-4">
        <a href="RB_leipzig"><img src="assets/imgs/produits/bundesliga/image 73.png" alt="" height="250">
          <button class="btn btn-dark position-absolute bottom-0 start-0" style="padding: 10px 30px; margin-left: 15px; margin-bottom: 10px; border-radius: 50px;">RB Leipzig</button>
        </a>
      </div>
    </div>

    <!--4 de bas-->
    <div class="row">
      <div class="position-relative col-md-3 mb-4">
        <a href="bayern_leverkusen"><img src="assets/imgs/produits/bundesliga/image 74.png" alt="" height="250">
          <button class="btn btn-dark position-absolute bottom-0 start-0" style="padding: 10px 30px; margin-left: 15px; margin-bottom: 10px; border-radius: 50px;">Bayer Leverkusen</button>
        </a>
      </div>
      <div class="position-relative col-md-3 mb-4">
        <a href="borussia"><img src="assets/imgs/produits/bundesliga/image 79.png" alt="" height="250">
          <button class="btn btn-dark position-absolute bottom-0 start-0" style="padding: 10px 30px; margin-left: 15px; margin-bottom: 10px; border-radius: 50px;">Borussia</button>
        </a>
      </div>
      <div class="position-relative col-md-3 mb-4">
        <a href="shalkes"><img src="assets/imgs/produits/bundesliga/image 76.png" alt="" height="250">
          <button class="btn btn-dark position-absolute bottom-0 start-0" style="padding: 10px 30px; margin-left: 15px; margin-bottom: 10px; border-radius: 50px;">Schalcke 04</button>
        </a>
      </div>
      <div class="position-relative col-md-3 mb-4">
        <a href="stuttgart"><img src="assets/imgs/produits/bundesliga/image 77.png" alt="" height="250">
          <button class="btn btn-dark position-absolute bottom-0 start-0" style="padding: 10px 30px; margin-left: 15px; margin-bottom: 10px; border-radius: 50px;">VFB Stuttgart</button>
        </a>
      </div>
    </div>

   </div>
   <!-- fin -->
  
  
  

    <!--produits-->
    <section class="py-5">
            <div class="container">
              <div class="row " style="color: black;">
                <h1 class="mb-3">Bundesliga: championnat élite du football allemand masculin.</h1>
                <p>

                    La Bundesliga est le championnat professionnel de football où le niveau est le plus relevé d'Allemagne.<br><br>
                    
                    La Bundesliga est composée de 18 équipes allemandes s'affrontant en matchs aller et retour d'août à mal-juin.<br><br>
                    
                    Le championnat est composé de 34 journées pour que les 18 clubs puissent affronter tous les autres clubs à 2 reprises, une fois à domicile dans son stade et une fois à l'extérieur dans le stade de l'équipe adverse.<br><br>
                    
                    La Deutsche Fussball-Liga organise ce championnat de Bundesliga depuis sa création en 1903.<br><br>
                    
                    Tous les clubs présents dans ce championnat sont professionnels.<br><br>
                    
                    Les deux clubs finissant à la 17ème et 18ème place du championnat sont automatiquement relégués en division inférieure, en 2.Bundesliga.<br><br>
                    
                    Pour ce qui est du haut du classement, le 1er du classement remporte le titre de Champion d'Allemagne et les clubs en 2ème, 3ème, 4ème, 5ème et 6ème place peuvent prétendre à une qualification en coupes européennes, que sont la Ligue des Champions et la Ligue Europa. De grands clubs se partagent régulièrement ces premières places et luttent chaque saison pour remporter le titre nationale suprême.<br><br>
                    
                    Le championnat allemand fait partie des meilleurs championnats d'Europe.<br><br>
                    
                    Pour beaucoup d'amateurs de football, il s'agit du championnat de football le plus plaisant à voir au quotidien car il y est joué un football très offensif et les ambiances dans les stades sont toujours spectaculaires.<br><br>
                    
                    Le tenant du titre est actuellement le Bayern Munich puisque le géant club allemand a remporté la Bundesliga lors de la saison 2022/23.<br><br>
                    
                    Les joueurs allemands sont nombreux à rester jouer dans leurs carrières dans un ou des clubs allemands, ce qui montre bien que la compétitivité de ce championnat et l'attraction de celui-ci en Europe sont fortes.<br><br>
                    
                    Le meilleur buteur de l'Histoire de ce championnat allemand est Gerd Müller avec 365 réalisations, et le joueur détenteur du plus grand
                    
                    nombre d'apparitions est Karl-Heinz Körbel avec 602 matchs à son actif.<br><br>
                    
                    Au cours de l'histoire de ce championnat, plusieurs grands clubs allemands ont su se distinguer de par leurs titres et leurs performances sur le terrain.</p>
              </div>
            </div>
    </section>
    <!--fin-->

    <!--  image -->
    <div class="text-center" >
      <img src="assets/imgs/produits/bundesliga/image 78.png" class="img-fluid" alt="Wild Landscape" /> 
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