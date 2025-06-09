<?php

namespace Denwallo\controllers;

use Denwallo\models\users\UserModel;
use Denwallo\models\ProduitModel;

abstract class Controller
{
    protected $userModel;
    protected $produitModel;

    public function __construct()
    {
        $this->userModel = new UserModel;
        $this->produitModel = new ProduitModel;

    }

    public function renderPage($datas_page)
    {
        
        extract($datas_page);
        ob_start();
        require($view);
        $contenu = ob_get_clean();
        require_once($layout);

    }

    public function isConnected(){
        return (!empty($_SESSION["mail"]));
    }
    public function isClient(){
        return (!empty($_SESSION["mail"]) && 
        ($_SESSION['role'] === "client"));
    }
    public function isAdmin(){
        return (!empty($_SESSION["mail"]) && 
        ($_SESSION['role'] === "admin"));
    }

}