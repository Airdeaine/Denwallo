<?php

namespace Denwallo\controllers\users;

use Denwallo\controllers\Controller;
use Exception;

class UserController extends Controller {

    public function loginPage() {

        //   if(!$this->isConnected()) {

        $datas_page = [
                "title"=> "Connexion",
                "description"=> "Page de connexion",
                "view"=> "./views/pages/users/loginPage.php",
                "layout"=> "./views/components/layout.php",
                "isCreator"=> $this->isCreator(),
                "isAdmin"=>$this->isAdmin()
            ];
            $this->renderPage($datas_page);

        // }else{

            // header("Location:".ROOT."accueil");

        // } 
        
    }
    public function registerPage() {

        $datas_page = [
                "title"=> "Inscription",
                "description"=> "Page d'inscription",
                "view"=> "./views/pages/users/registerPage.php",
                "layout"=> "./views/components/layout.php",
                "isCreator"=> $this->isCreator(),
                "isAdmin"=>$this->isAdmin()
            ];
            $this->renderPage($datas_page);

    }
 

}