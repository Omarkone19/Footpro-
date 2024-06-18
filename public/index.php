<?php

session_start();

use App\Controllers\Admin\AdminController;
use App\Controllers\SecurityController;
use App\Controllers\User\UserController;
use App\Controllers\Visitor\VisitorController;

require_once __DIR__.'/../vendor/autoload.php';


//define('URL',"http://localhost:8888/marketlev/");
define("URL", str_replace("public/", "", str_replace("index.php", "",
        (isset($_SERVER['HTTPS']) ? "https" : "http")
        . "://$_SERVER[HTTP_HOST]"
        . dirname($_SERVER['PHP_SELF'])) . '/'));

define('VIEWS_PATH', __DIR__.'/../App/Views/');


$visitor= new VisitorController();
$user= new UserController();
$admin=new AdminController();

try{
    if (empty($_GET["page"])){
        $visitor->accueil();
    }else{
        $url=explode("/", filter_var($_GET['page'], FILTER_SANITIZE_URL));
        
        switch ($url[0]){
            case "Accueil":
                $visitor->accueil();
                break;
            case "Equipes":
                $visitor->equipes();
                break;
            case "enfants" :
                $visitor->enfants();
                break;
            case "vintage" :
                $visitor->vintage();
                break;
            case "connexion":
                $visitor->connexion();
                break;
            case "Panier" :
                $visitor->panier();
                break;
            case "barcelone" :
                    $visitor->barcelone();
                    break;
            case "bayern_munich" :
               $visitor->bayern();
                 break; 
            case "paris_sg" :
                $visitor->psg();
                     break;
            case "real_madrid" :
            $visitor->real_madrid();
                break;   
                case "juventus" :
                $visitor->juventus();
                    break;
                case "dortmund" :
                $visitor->dortmund();
                    break;
            case "manchester_united" :
            $visitor->manchester_united();
                    break;
                case "manchester_city" :
                    $visitor->manchester_city();
                    break;
            case "laliga" :
                $visitor->laliga();
                break;
            case "premier_league" :
                $visitor->premier_league();
                break;
                case "serie_a" :
                    $visitor->serie_a();
                    break;
            case "ligue_1" :
                $visitor->ligue_1();
                break;
                case "bundesliga" :
                $visitor->bundesliga();
                    break;
                case "arsenal" :
                    $visitor->arsenal();
                    break;
                    case "liverpool" :
                    $visitor->liverpool();
                        break;
                    case "chelsea" :
                    $visitor->chelsea();
                        break;
                    case "spur_tottenham" :
                        $visitor->spur_tottenham();
                            break;
                    case "everton" :
                        $visitor->everton();
                            break;
                    case "aston_villa" :
                    $visitor->aston_villa();
                        break;
                      
                        case "atletico_madrid" :
                    $visitor->atletico_madrid();
                        break;
                        
                        case "real_sociedad" :
                            $visitor->real_sociedad();
                                break;
                        case "athletic_bilbao" :
                            $visitor->athletic_bilbao();
                        break;
                      
                        case "valence" :
                            $visitor->valence();
                        break;
                       
                        case "villareal" :
                            $visitor->villareal();
                                break;
                        case "betis_seville" :
                            $visitor->villareal();
                                  break;
                        case "inter_milan" :
                            $visitor->inter_milan();
                                break;
                        case "lazio_rome" :
                            $visitor->lazio_rome();
                                break;

                        case "ac_milan" :
                            $visitor->ac_milan();
                                break;
                        case "Naples" :
                            $visitor->Naples();
                                break;
                                                                                                        
                        case "atalanta_bergame" :
                            $visitor->atalanta_bergame();
                                break;                                                                                                                                                                                       
    
                        case "as_roma" :
                            $visitor->as_roma();
                                break;                                                                                                                                                                                       
                        case "florentina" :
                            $visitor->florentina();
                                break;                  
                        case "lens" :
                            $visitor->lens();
                                break;          
                        case "monaco" :
                            $visitor->monaco();
                                break;          
                        case "lyon" :
                            $visitor->lyon();
                                break;         
                        case "marseille" :
                            $visitor->marseille();
                                break;     
                        case "lille" :
                            $visitor->lille();
                                break;     
                        case "rennes" :
                            $visitor->rennes();
                                break;
                        case "nice" :
                            $visitor->nice();
                                break;

                        case "Eintract_Frankfurt" :
                            $visitor->Eintract_Frankfurt();
                                break;


                        case "RB_leipzig" :
                            $visitor->RB_leipzig();
                                break;

                        case "bayern_leverkusen" :
                            $visitor->bayern_leverkusen();
                                break;

                        case "borussia" :
                            $visitor->borussia();
                                break;


                        case "shalkes" :
                            $visitor->shalkes();
                                break;


                        case "stuttgart" :
                            $visitor->stuttgart();
                                break;
        
        
                        case "product_arsenal_domicle" :
                            $visitor->product_arsenal_domicle();
                                break;
        

                       
                        case "pro_arsenal_ext" :
                            $visitor->pro_arsenal_ext();
                                break;
                

                        case "product_arsenal_third" :
                            $visitor->product_arsenal_third();
                                break;

                        case "product_liverpoo_domicile" :
                            $visitor->product_liverpoo_domicile();
                                break;


                        case "product_liverpool_ext" :
                            $visitor->product_liverpool_ext();
                                break;



                        case "product_liverpool_third" :
                            $visitor->product_liverpool_third();
                                break;

                        case "product_chelsea_domicile" :
                            $visitor->product_chelsea_domicile();
                                break;


                        case "product_chelsea_ext" :
                            $visitor->product_chelsea_ext();
                                break;


                        case "products_chelsea_third" :
                            $visitor->products_chelsea_third();
                                break;


                        case "product_city_domicile" :
                            $visitor->product_city_domicile();
                                break;


                        case "product_city_ext" :
                            $visitor->product_city_ext();
                                break;
        

                        case "product_city_third" :
                            $visitor->product_city_third();
                                break;
        
                        case "product_united_domicile" :
                            $visitor->product_united_domicile();
                                break;


                        case "product_united_ext" :
                                $visitor->product_united_ext();
                                    break;


                        case "product_united_third" :
                            $visitor->product_united_third();
                                break;


                        case "product_tottenham_domicile" :
                            $visitor->product_tottenham_domicile();
                                break;



                        case "product_tottenham_ext" :
                            $visitor->product_tottenham_ext();
                                break;

                        case "product_tottenham_third" :
                            $visitor->product_tottenham_third();
                                break;

                        case "product_everton_domicile" :
                            $visitor->product_everton_domicile();
                                break;

                        case "product_everton_ext" :
                            $visitor->product_everton_ext();
                                break;

                        case "product_everton_third" :
                            $visitor->product_everton_third();
                                break;

                        case "product_aston_domicile" :
                            $visitor->product_aston_domicile();
                                break;

                        case "product_aston_ext" :
                            $visitor->product_aston_ext();
                                break;


                        case "product_aston_third" :
                            $visitor->product_aston_third();
                                break;

                        case "registration" :
                            $visitor->registration();
                                break;

                        case "detail" :
                            $visitor->detail();
                                break;


                        case "expediction" :
                            $visitor->expediction();
                                break;

                        case "paiement" :
                            $visitor->paiement();
                                break;
        
                        case "product_atl_domicile" :
                            $visitor->product_atl_domicile();
                                break;
                        case "product_atl_ext" :
                            $visitor->product_atl_ext();
                                break;


                        case "product_atl_third" :
                            $visitor->product_atl_third();
                                break;

                      
                        case "dashboard" :
                            $admin->dashboard();
                                break;

                    
                               
                       












                              



                            case "admin":
                if (SecurityController::isLogAdmin()){
                    if (!empty($url[1])){
                        switch ($url[1]){
                            case "dashboard":
                            $admin->dashboard();
                            break;
                            // case "product":
                            // if (!empty($url[2]) && $url[2]==='addproduct'){
                            // $admin->addProduct();
                            // }else{
                            // $admin->indexProduct();
                            // }
                            default:
                            $admin->dashboard();
                        }
                    }else{
                        $admin->dashboard();
                        break;
                    }
                }else{
                    $visitor->accueil();
                    break;
                }
            default:
                throw new Exception("La page n'existe pas");
        }
    }
}catch (Exception $exception){
    $error=$exception->getMessage();
    include VIEWS_PATH.'error.view.php';
}

