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
                    <a class="navbar-brand mt-2 mt-lg-0" href="Accueil">
                    <img
                        src="assets/imgs/Logo/logo.png"
                        height="100"
                        alt="logo"
                        loading="lazy"
                    />
                    </a>

                </div>
                <!-- Collapsible wrapper -->
        
            </div>
            <!-- Container wrapper -->
    </nav>
    <!-- Navbar -->
    <section class="d-flex justify-content-center justify-content-lg-between p-4 " style="color: black;">
        <!-- head -->
        <div class="me-5 d-none d-lg-block">
            <h5> <a href="Panier"><span style="color: #db4444;">Panier</span></a> > <a href="detail" style="color: #db4444;">Détails </a> > <a href="expediction" style="color: #db4444;">Expédiction </a> > <a href="paiement"><span style="color: black;">Paiement</span></a> </h5>
        </div>
        <!-- fin -->
    </section>
    


    <!--corps-->
    <div class="container-fluid mt-5">
        <div class="row">
            <div class="col-md-6 offset-md-1">
                <table class="table align-middle">

                    <tbody>
                      <tr>
                        <td id="contact">omarkonepro75@gmail.com</td>
                        <td><a href="#" class="btn btn-sm" style="color: #db4444;" onclick="editContact()">Modifier</a></td>
                        
                    </tr>
                     
                    
                    <script>
                        function editContact() {
                            var contactElement = document.getElementById('contact');
                            var currentContact = contactElement.textContent;
                            var newContact = prompt("Entrez le nouveau contact :", currentContact);
                            if (newContact !== null) {
                                // Mettre à jour le contact dans le tableau et enregistrer dans la base de données
                                contactElement.textContent = newContact;
                            }
                        }
                    </script>
                     
                      <tr>
                        <td id="envoyerAdresse">Envoyer à : Le Louvre, Rue de Rivoli, 75001 Paris, France</td>
                        <td><a href="#" class="btn btn-sm" style="color: #db4444;" onclick="editEnvoyerAdresse()">Modifier</a></td>
                       </tr>
                   
                       <script>
                       function editEnvoyerAdresse() {
                        var envoyerAdresseElement = document.getElementById('envoyerAdresse');
                        var currentAddress = envoyerAdresseElement.textContent.split(' : ')[1].trim(); // Obtient l'adresse actuelle
                        var newAddress = prompt("Entrez la nouvelle adresse d'envoi :", currentAddress);
                        if (newAddress !== null) {
                            // Mettre à jour l'adresse dans le tableau
                            envoyerAdresseElement.textContent = "Envoyer à : " + newAddress;
                        }
                    }
                    </script>
                   
                   
                    </tbody>
                </table><br><br>

                <h4><strong>Adresse de Facturation</strong></h4>
                <table class="table align-middle">
                    <tbody>
                      <tr>
                        <td><input type="checkbox" class="form-check-input" id="sameAddress">Mode de livraison</td>
                        <td><strong style="color: black;" >Gratuit</strong></td>
                      </tr>
                      
                    
                    </tbody>
                </table><br><br>
              
               
                <a href="detail" type="button" class="btn " style="color: #db4444;">
                    <i class="fas fa-arrow-left me-1"></i> Retour au détails
                </a>
               
                <a href="paiement" type="button" class="btn" style="background-color: #db4444; color: white; float: right;">
                    Aller au paiement
                </a>
                


               
            </div>
            <div class="col-md-5" style="background-color: #ccc;">
                <div class="product-details d-flex ">
                    <img src="assets/imgs/Maillot/téléchargement.png" alt="Image du produit" class="product-image">
                    
                    <div class="mb-3 text-justify"><br>
                        <strong>NIKE</strong> <br> 
                        <strong>Maillot Third authentique Chelsea 2023/24</strong><br>
                        <strong>Taille S</strong>
                    </div>
                   
                </div>
                <hr> <!-- Trait de séparation -->
                <div class="mb-3">
                    <input type="text" class="form-control" placeholder="Code promo">
                </div>
                <button type="button" class="btn btn-danger">Valider</button> <!-- Bouton Valider -->
                <hr> <!-- Trait de séparation -->
                <div class="d-flex justify-content-between">
                    <div class="mb-3 text-justify">
                        <strong>Total</strong> <br> 
                        <strong>Expédition</strong><br>
                    </div>
                    <div class="mb-3 text-end">
                        <strong>80.00€</strong> <br> 
                        <strong>calculé à l'étape suivante</strong><br>
                    </div>
                </div>
                <hr> <!-- Trait de séparation -->
                <div class="d-flex justify-content-between">
                    <div class="mb-3 text-justify">
                        <strong>Total</strong> <br> 
                        
                    </div>
                    <div class="mb-3 text-end">
                        <strong>80.00€</strong> <br> 
                        
                    </div>
                </div>
                <div class="form-check">
    
                  </div>
                  <div class="form-check">
    
                  </div>
            </div>
        </div>
        
    </div>

    
    <!---->


    <!--bar footer
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
    -fin-->
   
    <!-- Footer -->
    <footer class="text-center text-lg-start text-muted mt-5" style="background-color: black;">
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

    
    <!-- Link to Bootstrap JS via MDB CDN -->
    <script
    type="text/javascript"
    src="https://cdnjs.cloudflare.com/ajax/libs/mdb-ui-kit/7.2.0/mdb.umd.min.js"
    ></script>
</body>
</html>
