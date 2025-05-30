<?php

    namespace Denwallo\controllers;

    use Denwallo\controllers\Controller;

    class MainController extends Controller {

        public function homePage() {

            $datas_page = [
                "title"=> "Page d'accueil",
                "description"=> "Page d'accueil du site Denwallo",
                "view"=> "./views/pages/homePage.php",
                "layout"=> "./views/components/layout.php",
                "isCreator"=> $this->isCreator(),
                "isAdmin"=>$this->isAdmin()
                
            ];

            $this->renderPage($datas_page);

        }
        public function smartphonePage() {

            $datas_page = [
                "title"=> "Nos marques",
                "description"=> "Page des marques",
                "view"=> "./views/pages/smartphonePage.php",
                "layout"=> "./views/components/layout.php",
                "isCreator"=> $this->isCreator(),
                "isAdmin"=>$this->isAdmin()
                
            ];

            $this->renderPage($datas_page);

        }
        public function panierPage() {

            $datas_page = [
                "title"=> "Mon Panier",
                "description"=> "Page du panier",
                "view"=> "./views/pages/panierPage.php",
                "layout"=> "./views/components/layout.php",
                "isCreator"=> $this->isCreator(),
                "isAdmin"=>$this->isAdmin()
                
            ];

            $this->renderPage($datas_page);

        }
        public function espacePage() {

            $datas_page = [
                "title"=> "Mon Espace",
                "description"=> "Page de l'espace client",
                "view"=> "./views/pages/espacePage.php",
                "layout"=> "./views/components/layout.php",
                "isCreator"=> $this->isCreator(),
                "isAdmin"=>$this->isAdmin()
                
            ];

            $this->renderPage($datas_page);

        }
        public function contactPage() {

            $datas_page = [
                "title"=> "Nous contacter",
                "description"=> "Page pour contacter le support",
                "view"=> "./views/pages/contactPage.php",
                "layout"=> "./views/components/layout.php",
                "isCreator"=> $this->isCreator(),
                "isAdmin"=>$this->isAdmin()
                
            ];

            $this->renderPage($datas_page);

        }
        public function produitPage() {

            $datas_page = [
                "title"=> "Nos produits",
                "description"=> "Page des produits",
                "view"=> "./views/pages/produitPage.php",
                "layout"=> "./views/components/layout.php",
                "isCreator"=> $this->isCreator(),
                "isAdmin"=>$this->isAdmin()
                
            ];

            $this->renderPage($datas_page);

        }
        public function detailsPage() {

            $datas_page = [
                "title"=> "Details du produit",
                "description"=> "Page contenant les details du produit selectionné",
                "view"=> "./views/pages/details_produitPage.php",
                "layout"=> "./views/components/layout.php",
                "isCreator"=> $this->isCreator(),
                "isAdmin"=>$this->isAdmin()
                
            ];

            $this->renderPage($datas_page);

        }

    }