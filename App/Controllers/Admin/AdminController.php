<?php

namespace App\Controllers\Admin;

use App\Controllers\AbstractController;

class AdminController extends AbstractController{


    public function dashboard(): void
    {
        $title="Dashboard Admin";
        $this->render(["Admin/dashboard"],
            ['title'=>$title]
        , "admin");

        
    }

    

   


}

