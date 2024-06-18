<!DOCTYPE html>
<html lang="fr">
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
    /> <style>
        .product-images img {
            width: 100px;
            height: auto;
            margin-bottom: 10px;
            cursor: pointer;
        }
        .selected-img img {
            border: 2px solid #007bff; /* Couleur bleue pour indiquer l'image sélectionnée */
        }
    </style>
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
                <a class="navbar-brand mt-2 mt-lg-0" href="index.html">
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
                        <a class="nav-link active" href="index.html">Accueil</a>
                    </li>
                    <li class="nav-item" style=" font-weight: bold;">
                        <a class="nav-link" href="en_cours.html">ÉQUIPES</a>
                    </li>
                    <li class="nav-item" style=" font-weight: bold;">
                        <a class="nav-link" href="maillot_enfants.html">ENFANT</a>
                    </li>
                    <li class="nav-item" style=" font-weight: bold;">
                        <a class="nav-link" href="maillot_vintage.html">VINTAGE</a>
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
                 <a class="link-secondary me-3" href="connexion.html">
                    <i class="fa-solid fa-user"></i>
                  </a>
  
                    <!-- Icon -->
                    <a class="link-secondary me-3" href="panier.html">
                    <i class="fas fa-shopping-cart"></i>
                    </a>
        
            </div>
            <!-- Right elements -->
            </div>
            <!-- Container wrapper -->
    </nav>
    <!-- Navbar -->

    <div class="container mt-5">
        <div class="row">
            <div class="col-md-3">
                <!-- Section des images du produit -->
                <div class="d-flex flex-column ">
                    <img src="assets/imgs/Maillot/bilbaoe1.webp" alt="" style="height: 100px; width: 150px; border: 2px solid #db4444;"><br>

                    <img src="assets/imgs/Maillot/bilbaoe2.webp" alt="" style="height: 100px; width: 150px; border: 2px solid #db4444;"><br>

                    <img src="assets/imgs/Maillot/bilbaoe3.webp" alt="" style="height: 100px; width: 150px; border: 2px solid #db4444;"><br>

                    <img src="assets/imgs/Maillot/bilbaoe4.webp" alt="" style="height: 100px; width: 150px; border: 2px solid #db4444;"><br>

                    
                </div>
            </div>
            <div class="col-md-4">
                <!-- Image principale du produit -->
                <div class="selected-img">
                    <img src="assets/imgs/Maillot/bilbaoe1.webp"  alt="Maillot Chelsea Third" style="height: 500px; width: 350px; border: 20px solid #ccc;">

                 </div>
           
                <script>
                 document.addEventListener("DOMContentLoaded", function() {
                    const thumbnails = document.querySelectorAll(".col-md-3 img");
                
                    thumbnails.forEach(thumbnail => {
                        thumbnail.addEventListener("click", function() {
                            const selectedImage = document.querySelector(".selected-img img");
                            selectedImage.src = this.src;
                            selectedImage.alt = this.alt;
                        });
                    });
                });
                
                </script>


           
            </div>
            
            <div class="col-md-4 " style="">
                <h2>Maillots Extérieur authentic Athletic Bilbao
                    2023/202424
                    
                    </h2>
                <p>Prix : <span class="price">90,00 €</span> <del>105,00 €</del></p>
                <hr> <!-- Trait de séparation -->
                <div class="row row-cols-2 row-cols-md-5 g-4 justify-content-center">
                    <button id="sizeXS" class="sizeButton" style="width: 50px; height: 50px; border: 2px solid #db4444; margin-right: 10px;">XS</button>
                    <button id="sizeS" class="sizeButton" style="width: 50px; height: 50px; border: 2px solid #db4444; margin-right: 10px;">S</button>
                    <button id="sizeM" class="sizeButton" style="width: 50px; height: 50px; border: 2px solid #db4444; margin-right: 10px;">M</button>
                    <button id="sizeL" class="sizeButton" style="width: 50px; height: 50px; border: 2px solid #db4444; margin-right: 10px;">L</button>
                    <button id="sizeXL" class="sizeButton" style="width: 50px; height: 50px; border: 2px solid #db4444;">XL</button>
                </div>
                
                <script>
                    // Récupérer tous les boutons de taille
                    var sizeButtons = document.querySelectorAll('.sizeButton');
            
                    // Ajouter un écouteur d'événements à chaque bouton
                    sizeButtons.forEach(function(button) {
                        button.addEventListener('click', function() {
                            // Supprimer la classe 'selected' de tous les boutons
                            sizeButtons.forEach(function(btn) {
                                btn.classList.remove('selected');
                            });
                            // Ajouter la classe 'selected' au bouton cliqué
                            button.classList.add('selected');
                        });
                    });
                </script>

            <div class="rating" style="margin-top: 20px;">
                <!-- Etoiles de notation -->
                <span class="text-warning">&#9733;</span>
                <span class="text-warning">&#9733;</span>
                <span class="text-warning">&#9733;</span>
                <span class="text-warning">&#9733;</span>
                <span class="text-secondary">&#9733;</span>
            </div>

                <hr> <!-- Trait de séparation -->
                <!-- Options de personnalisation -->
                <div class="customization">
                    <label for="flocage">Flocage :</label>
                     <label for="floc">Sans flocage</label><br>
                    <div class="d-flex justify-content-between ">
                        <a href="#" id="sansFlocage" class="btn btn-option" style="color: #db4444;">
                            <i class="me-1"></i> Sans flocage
                        </a>
                        
                        <button id="flocagePersonnaliser" class="btn btn-option" style="background-color: #db4444; color: white;">
                            Flocage Personnaliser
                        </button>
                    </div>
                    
                    <script>
                        var flocageBtn = document.getElementById('flocagePersonnaliser');
                    
                        flocageBtn.addEventListener('click', function() {
                            flocageBtn.classList.toggle('enlarged');
                        });
                    </script>
                    
                    <script>
                        var sansFlocageBtn = document.getElementById('sansFlocage');
                        var flocageBtn = document.getElementById('flocagePersonnaliser');
                    
                        sansFlocageBtn.addEventListener('click', function() {
                            sansFlocageBtn.classList.add('enlarged');
                            flocageBtn.classList.remove('enlarged');
                        });
                    
                        flocageBtn.addEventListener('click', function() {
                            flocageBtn.classList.add('enlarged');
                            sansFlocageBtn.classList.remove('enlarged');
                        });
                    </script>
                    
                    
                </div>
                <div class="mb-3" style="margin-top: 20px;">
                    <input type="text" class="form-control" placeholder="Joueurs 7">
                </div>
                
                <!-- Sélecteur de quantité et bouton "Ajouter au panier" -->
                <div class="d-flex justify-content-between ">
                    <div class="quantity mt-4">
                        <label for="quantity">Quantité :</label>
                        <button id="decrease">-</button>
                        <input style="width: 30px;" type="number" id="quantity" name="quantity" min="1" value="1">
                        <button id="increase">+</button>
                        
                        <script>
                            document.getElementById('increase').addEventListener('click', function() {
                                var quantityInput = document.getElementById('quantity');
                                var currentValue = parseInt(quantityInput.value);
                                quantityInput.value = currentValue + 1;
                            });
                        
                            document.getElementById('decrease').addEventListener('click', function() {
                                var quantityInput = document.getElementById('quantity');
                                var currentValue = parseInt(quantityInput.value);
                                if (currentValue > 1) {
                                    quantityInput.value = currentValue - 1;
                                }
                            });
                            </script>
                        <a href="panier.html">
                        <button style="height: 40px; background-color: #db4444; color: white; margin-left: 20px;" class="btn mt-3"><i class="fas fa-shopping-cart"></i>+ Ajouter au panier</button>
                         </a>
                    </div>
                    
                </div>
            </div>
        </div>
    </div>


    
    <!--bar footer
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
      
    --fin-->
   
    <!-- Footer -->
    <footer class="text-center text-lg-start text-muted" style="background-color: black;">
        <!-- Section: Social media -->
        <section class="d-flex justify-content-center justify-content-lg-between p-4 border-bottom" style="color: white;">
        <!-- Left -->
        <div class="me-5 d-none d-lg-block">
            <span>Rejoignez-nous sur les réseaux sociaux :
            </span>
        </div>
        <!-- Left -->
    
        <!-- Right -->
        <div>
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

    <script>
        // Script pour mettre en surbrillance l'image sélectionnée
        $('.product-images img').click(function() {
            $('.product-images img').removeClass('selected-img');
            $(this).parent().addClass('selected-img');
        });
    </script>
</body>
</html>
