<?php

namespace Denwallo\controllers\users;

use Denwallo\controllers\Controller;
use Exception;

class AdminController extends Controller {

    public function loginAdminPage() {

        //   if(!$this->isConnected()) {

        $datas_page = [
                "title"=> "Connexion Admin",
                "description"=> "Page de connexion de l'administrateur",
                "view"=> "./views/pages/users/admin/loginAdminPage.php",
                "layout"=> "./views/components/layoutAdmin.php",
                "isAdmin"=>$this->isAdmin()
            ];
            $this->renderPage($datas_page);

        // }else{

            // header("Location:".ROOT."accueil");

        // } 
        
    }

    public function adminPage() {

        if($this->isAdmin()) {

        $datas_page = [
                "title"=> "Administration",
                "description"=> "Page de l'administrateur",
                "view"=> "./views/pages/users/admin/adminPage.php",
                "layout"=> "./views/components/layoutAdmin.php",
                "isAdmin"=>$this->isAdmin()
            ];
            $this->renderPage($datas_page);

        }else{

            header("Location:".ROOT."accueil");

        } 
        
    }
    public function produitPage() {

        $allPhones = $this->produitModel->getAllPhones();

        $datas_page = [
                "title"=> "Produits",
                "description"=> "Page de gestion des produits",
                "view"=> "./views/pages/users/admin/produitPage.php",
                "layout"=> "./views/components/layoutAdmin.php",
                "produits"=>$allPhones,
                "isClient"=> $this->isClient(),
                "isAdmin"=>$this->isAdmin()
            ];
            $this->renderPage($datas_page);

        // }else{

            // header("Location:".ROOT."accueil");

        // } 
        
    }
    public function addProduitPage() {

        //   if(!$this->isConnected()) {

        $datas_page = [
                "title"=> "Ajout d'un produits",
                "description"=> "Formulaire permettant d'ajouter un produit",
                "view"=> "./views/pages/users/admin/addProduitPage.php",
                "layout"=> "./views/components/layoutAdmin.php",
                "isClient"=> $this->isClient(),
                "isAdmin"=>$this->isAdmin()
            ];
            $this->renderPage($datas_page);

        // }else{

            // header("Location:".ROOT."accueil");

        // } 
        
    }

    public function logout() {
        session_destroy();
        header("Location:".ROOT);
        
    }
 

}