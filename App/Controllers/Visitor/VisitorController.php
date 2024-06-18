<?php

namespace App\Controllers\Visitor;
use App\Controllers\AbstractController;
use App\Controllers\SecurityController;

class VisitorController extends AbstractController {

    private SecurityController $security;

    public function __construct()
    {
        $this->security=new SecurityController();
    }


    public function accueil(): void
    {
        $title = "Accueil";

        // Views to display
        $list = ["index"];

        // Calling of the method to display the views
        $this->render($list, ["title" => $title]);
    }


    public function equipes(): void
    {
        $title = "Equipes";

        // Views to display
        $list = ["en_cours"];

        // Calling of the method to display the views
        $this->render($list, ["title" => $title]);
    }


    public function enfants(): void
    {
        $title = "Enfants";

        // Views to display
        $list = ["maillot_enfants"];

        // Calling of the method to display the views
        $this->render($list, ["title" => $title]);
    }

    public function vintage(): void
    {
        $title = "Vintage";

        // Views to display
        $list = ["maillot_vintage"];

        // Calling of the method to display the views
        $this->render($list, ["title" => $title]);
    }

    public function connexion(): void
    {
        $title = "Connexion";

        // Views to display
        $list = ["connexion"];

        // Calling of the method to display the views
        $this->render($list, ["title" => $title]);
    }

    public function panier(): void
    {
        $title = "Panier";

        // Views to display
        $list = ["panier"];

        // Calling of the method to display the views
        $this->render($list, ["title" => $title]);
    }

    public function barcelone(): void
    {
        $title = "barcelone";

        // Views to display
        $list = ["barcelone"];

        // Calling of the method to display the views
        $this->render($list, ["title" => $title]);
    }

    public function bayern(): void
    {
        $title = "bayern_munich";

        // Views to display
        $list = ["bayern_munich"];

        // Calling of the method to display the views
        $this->render($list, ["title" => $title]);
    }

    public function psg(): void
    {
        $title = "paris_sg";

        // Views to display
        $list = ["paris_sg"];

        // Calling of the method to display the views
        $this->render($list, ["title" => $title]);
    }


    public function real_madrid(): void
    {
        $title = "real_madrid";

        // Views to display
        $list = ["real_madrid"];

        // Calling of the method to display the views
        $this->render($list, ["title" => $title]);
    }

    public function juventus(): void
    {
        $title = "juventus";

        // Views to display
        $list = ["juventus"];

        // Calling of the method to display the views
        $this->render($list, ["title" => $title]);
    }

    public function dortmund(): void
    {
        $title = "dortmund";

        // Views to display
        $list = ["dortmund"];

        // Calling of the method to display the views
        $this->render($list, ["title" => $title]);
    }



    public function manchester_united(): void
    {
        $title = "manchester_united";

        // Views to display
        $list = ["manchester_united"];

        // Calling of the method to display the views
        $this->render($list, ["title" => $title]);


    }

    public function manchester_city(): void
    {
        $title = "manchester_city";

        // Views to display
        $list = ["manchester_city"];

        // Calling of the method to display the views
        $this->render($list, ["title" => $title]);


    }


    public function premier_league(): void
    {
        $title = "premier_league";

        // Views to display
        $list = ["premier_league"];

        // Calling of the method to display the views
        $this->render($list, ["title" => $title]);


    }


    public function laliga(): void
    {
        $title = "laliga";

        // Views to display
        $list = ["laliga"];

        // Calling of the method to display the views
        $this->render($list, ["title" => $title]);


    }

    
    

    public function serie_a(): void
    {
        $title = "serie_a";

        // Views to display
        $list = ["serieA"];

        // Calling of the method to display the views
        $this->render($list, ["title" => $title]);


    }
   


    public function ligue_1(): void
    {
        $title = "ligue_1";

        // Views to display
        $list = ["lige1"];

        // Calling of the method to display the views
        $this->render($list, ["title" => $title]);


    }
   


    public function bundesliga(): void
    {
        $title = "bundesliga";

        // Views to display
        $list = ["bundesliga"];

        // Calling of the method to display the views
        $this->render($list, ["title" => $title]);


    }
   

    public function arsenal(): void
    {
        $title = "arsenal";

        // Views to display
        $list = ["arsenal"];

        // Calling of the method to display the views
        $this->render($list, ["title" => $title]);
    }


    public function liverpool(): void
    {
        $title = "liverpool";

        // Views to display
        $list = ["liverpool"];

        // Calling of the method to display the views
        $this->render($list, ["title" => $title]);
    }

    public function chelsea(): void
    {
        $title = "chelsea";

        // Views to display
        $list = ["chelsea"];

        // Calling of the method to display the views
        $this->render($list, ["title" => $title]);
    }
    public function spur_tottenham(): void
    {
        $title = "spur_tottenham";

        // Views to display
        $list = ["spur_tottenham"];

        // Calling of the method to display the views
        $this->render($list, ["title" => $title]);
    }

    public function everton(): void
    {
        $title = "everton";

        // Views to display
        $list = ["everton"];

        // Calling of the method to display the views
        $this->render($list, ["title" => $title]);
    }



    public function aston_villa(): void
    {
        $title = "aston_villa";

        // Views to display
        $list = ["aston_villa"];

        // Calling of the method to display the views
        $this->render($list, ["title" => $title]);
    }



    public function atletico_madrid(): void
    {
        $title = "atletico_madrid";

        // Views to display
        $list = ["atletico_madrid"];

        // Calling of the method to display the views
        $this->render($list, ["title" => $title]);
    }



    public function real_sociedad(): void
    {
        $title = "real_sociedad";

        // Views to display
        $list = ["real_sociedad"];

        // Calling of the method to display the views
        $this->render($list, ["title" => $title]);
    }


    public function athletic_bilbao(): void
    {
        $title = "athletic_bilbao";

        // Views to display
        $list = ["athletic_bilbao"];

        // Calling of the method to display the views
        $this->render($list, ["title" => $title]);
    }

    public function valence(): void
    {
        $title = "valence";

        // Views to display
        $list = ["valence"];

        // Calling of the method to display the views
        $this->render($list, ["title" => $title]);
    }


    public function villareal(): void
    {
        $title = "villareal";

        // Views to display
        $list = ["villareal"];

        // Calling of the method to display the views
        $this->render($list, ["title" => $title]);
    }


    public function betis_seville(): void
    {
        $title = "betis_seville";

        // Views to display
        $list = ["betis_seville"];

        // Calling of the method to display the views
        $this->render($list, ["title" => $title]);
    }



    public function inter_milan(): void
    {
        $title = "inter_milan";

        // Views to display
        $list = ["inter_milan"];

        // Calling of the method to display the views
        $this->render($list, ["title" => $title]);
    }



    public function lazio_rome(): void
    {
        $title = "lazio_rome";

        // Views to display
        $list = ["lazio_rome"];

        // Calling of the method to display the views
        $this->render($list, ["title" => $title]);
    }

    public function ac_milan(): void
    {
        $title = "ac_milan";

        // Views to display
        $list = ["ac_milan"];

        // Calling of the method to display the views
        $this->render($list, ["title" => $title]);
    }

    public function Naples(): void
    {
        $title = "Naples";

        // Views to display
        $list = ["Naples"];

        // Calling of the method to display the views
        $this->render($list, ["title" => $title]);
    }




    public function atalanta_bergame(): void
    {
        $title = "atalanta_bergame";

        // Views to display
        $list = ["atalanta_bergame"];

        // Calling of the method to display the views
        $this->render($list, ["title" => $title]);
    }



    public function as_roma(): void
    {
        $title = "as_roma";

        // Views to display
        $list = ["as_roma"];

        // Calling of the method to display the views
        $this->render($list, ["title" => $title]);
    }




    public function florentina(): void
    {
        $title = "florentina";

        // Views to display
        $list = ["florentina"];

        // Calling of the method to display the views
        $this->render($list, ["title" => $title]);
    }



    public function lens(): void
    {
        $title = "lens";

        // Views to display
        $list = ["lens"];

        // Calling of the method to display the views
        $this->render($list, ["title" => $title]);
    }

    public function monaco(): void
    {
        $title = "monaco";

        // Views to display
        $list = ["monaco"];

        // Calling of the method to display the views
        $this->render($list, ["title" => $title]);
    }


    public function lyon(): void
    {
        $title = "lyon";

        // Views to display
        $list = ["lyon"];

        // Calling of the method to display the views
        $this->render($list, ["title" => $title]);
    }



    public function marseille(): void
    {
        $title = "marseille";

        // Views to display
        $list = ["marseille"];

        // Calling of the method to display the views
        $this->render($list, ["title" => $title]);
    }




    public function lille(): void
    {
        $title = "lille";

        // Views to display
        $list = ["lille"];

        // Calling of the method to display the views
        $this->render($list, ["title" => $title]);
    }




    public function rennes(): void
    {
        $title = "rennes";

        // Views to display
        $list = ["rennes"];

        // Calling of the method to display the views
        $this->render($list, ["title" => $title]);
    }




    public function nice(): void
    {
        $title = "nice";

        // Views to display
        $list = ["nice"];

        // Calling of the method to display the views
        $this->render($list, ["title" => $title]);
    }

    public function Eintract_Frankfurt(): void
    {
        $title = "Eintract_Frankfurt";

        // Views to display
        $list = ["Eintract_Frankfurt"];

        // Calling of the method to display the views
        $this->render($list, ["title" => $title]);
    }




    public function RB_leipzig(): void
    {
        $title = "RB_leipzig";

        // Views to display
        $list = ["RB_leipzig"];

        // Calling of the method to display the views
        $this->render($list, ["title" => $title]);
    }




    public function bayern_leverkusen(): void
    {
        $title = "bayern_leverkusen";

        // Views to display
        $list = ["bayern_leverkusen"];

        // Calling of the method to display the views
        $this->render($list, ["title" => $title]);
    }


    public function borussia(): void
    {
        $title = "borussia";

        // Views to display
        $list = ["borussia"];

        // Calling of the method to display the views
        $this->render($list, ["title" => $title]);
    }


    public function shalkes(): void
    {
        $title = "shalkes";

        // Views to display
        $list = ["shalkes"];

        // Calling of the method to display the views
        $this->render($list, ["title" => $title]);
    }




    public function stuttgart(): void
    {
        $title = "stuttgart";

        // Views to display
        $list = ["stuttgart"];

        // Calling of the method to display the views
        $this->render($list, ["title" => $title]);
    }



    public function product_arsenal_domicle(): void
    {
        $title = "product_arsenal_domicle";

        // Views to display
        $list = ["product_arsenal_domicle"];

        // Calling of the method to display the views
        $this->render($list, ["title" => $title]);
    }



    public function pro_arsenal_ext(): void
    {
        $title = "pro_arsenal_ext";

        // Views to display
        $list = ["product_arsenal_extérieur"];

        // Calling of the method to display the views
        $this->render($list, ["title" => $title]);
    }



    
    public function product_arsenal_third(): void
    {
        $title = "product_arsenal_third";

        // Views to display
        $list = ["product_arsenal_third"];

        // Calling of the method to display the views
        $this->render($list, ["title" => $title]);
    }



    



    public function product_liverpoo_domicile(): void
    {
        $title = "product_liverpoo_domicile";

        // Views to display
        $list = ["product_liverpoo_domicile"];

        // Calling of the method to display the views
        $this->render($list, ["title" => $title]);
    }





    public function product_liverpool_ext(): void
    {
        $title = "product_liverpool_ext";

        // Views to display
        $list = ["product_liverpool_ext"];

        // Calling of the method to display the views
        $this->render($list, ["title" => $title]);
    }




    public function product_liverpool_third(): void
    {
        $title = "product_liverpool_third";

        // Views to display
        $list = ["product_liverpool_third"];

        // Calling of the method to display the views
        $this->render($list, ["title" => $title]);
    }


    public function product_chelsea_domicile(): void
    {
        $title = "product_chelsea_domicile";

        // Views to display
        $list = ["product_chelsea_domicile"];

        // Calling of the method to display the views
        $this->render($list, ["title" => $title]);
    }



    public function product_chelsea_ext(): void
    {
        $title = "product_chelsea_ext";

        // Views to display
        $list = ["product_chelsea_ext"];

        // Calling of the method to display the views
        $this->render($list, ["title" => $title]);
    }



    public function products_chelsea_third(): void
    {
        $title = "products_chelsea_third";

        // Views to display
        $list = ["products_chelsea_third"];

        // Calling of the method to display the views
        $this->render($list, ["title" => $title]);
    }


    public function product_city_domicile(): void
    {
        $title = "product_city_domicile";

        // Views to display
        $list = ["product_city_domicile"];

        // Calling of the method to display the views
        $this->render($list, ["title" => $title]);
    }



    public function product_city_ext(): void
    {
        $title = "product_city_ext";

        // Views to display
        $list = ["product_city_ext"];

        // Calling of the method to display the views
        $this->render($list, ["title" => $title]);
    }


    public function product_city_third(): void
    {
        $title = "product_city_third";

        // Views to display
        $list = ["product_city_third"];

        // Calling of the method to display the views
        $this->render($list, ["title" => $title]);
    }

    public function product_united_domicile(): void
    {
        $title = "product_united_domicile";

        // Views to display
        $list = ["product_united_domicile"];

        // Calling of the method to display the views
        $this->render($list, ["title" => $title]);
    }



    public function product_united_ext(): void
    {
        $title = "product_united_ext";

        // Views to display
        $list = ["product_united_ext"];

        // Calling of the method to display the views
        $this->render($list, ["title" => $title]);
    }

    public function product_united_third(): void
    {
        $title = "product_united_third";

        // Views to display
        $list = ["product_united_third"];

        // Calling of the method to display the views
        $this->render($list, ["title" => $title]);
    }

    public function product_tottenham_domicile(): void
    {
        $title = "product_tottenham_domicile";

        // Views to display
        $list = ["product_tottenham_domicile"];

        // Calling of the method to display the views
        $this->render($list, ["title" => $title]);
    }


    public function product_tottenham_ext(): void
    {
        $title = "product_tottenham_ext";

        // Views to display
        $list = ["product_tottenham_ext"];

        // Calling of the method to display the views
        $this->render($list, ["title" => $title]);
    }


    public function product_tottenham_third(): void
    {
        $title = "product_tottenham_third";

        // Views to display
        $list = ["product_tottenham_third"];

        // Calling of the method to display the views
        $this->render($list, ["title" => $title]);
    }


    public function product_everton_domicile(): void
    {
        $title = "product_everton_domicile";

        // Views to display
        $list = ["product_everton_domicile"];

        // Calling of the method to display the views
        $this->render($list, ["title" => $title]);
    }


    public function product_everton_ext(): void
    {
        $title = "product_everton_ext";

        // Views to display
        $list = ["product_everton_ext"];

        // Calling of the method to display the views
        $this->render($list, ["title" => $title]);
    }



    public function product_everton_third(): void
    {
        $title = "product_evertoproduct_everton_thirdn_ext";

        // Views to display
        $list = ["product_everton_third"];

        // Calling of the method to display the views
        $this->render($list, ["title" => $title]);
    }

    public function product_aston_domicile(): void
    {
        $title = "product_aston_domicile";

        // Views to display
        $list = ["product_aston_domicile"];

        // Calling of the method to display the views
        $this->render($list, ["title" => $title]);
    }



    public function product_aston_ext(): void
    {
        $title = "product_aston_ext";

        // Views to display
        $list = ["product_aston_ext"];

        // Calling of the method to display the views
        $this->render($list, ["title" => $title]);
    }




    public function product_aston_third(): void
    {
        $title = "product_aston_third";

        // Views to display
        $list = ["product_aston_third"];

        // Calling of the method to display the views
        $this->render($list, ["title" => $title]);
    }




    public function registration(): void
    {
        $title = "registration";

        // Views to display
        $list = ["registration"];

        // Calling of the method to display the views
        $this->render($list, ["title" => $title]);
    }



    public function detail(): void
    {
        $title = "detail";

        // Views to display
        $list = ["detail"];

        // Calling of the method to display the views
        $this->render($list, ["title" => $title]);
    }


    public function expediction(): void
    {
        $title = "expediction";

        // Views to display
        $list = ["expediction"];

        // Calling of the method to display the views
        $this->render($list, ["title" => $title]);
    }

    public function paiement(): void
    {
        $title = "paiement";

        // Views to display
        $list = ["paiement"];

        // Calling of the method to display the views
        $this->render($list, ["title" => $title]);
    }



    public function product_atl_domicile(): void
    {
        $title = "product_atl_domicile";

        // Views to display
        $list = ["product_atl_domicile"];

        // Calling of the method to display the views
        $this->render($list, ["title" => $title]);
    }


    public function product_atl_ext(): void
    {
        $title = "product_atl_ext";

        // Views to display
        $list = ["product_atl_ext"];

        // Calling of the method to display the views
        $this->render($list, ["title" => $title]);
    }



    public function product_atl_third(): void
    {
        $title = "product_atl_third";

        // Views to display
        $list = ["product_atl_third"];

        // Calling of the method to display the views
        $this->render($list, ["title" => $title]);
    }




   













    

}








