<?php

namespace Denwallo\controllers;

abstract class Controller
{

    public function __construct()
    {


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
        return (!empty($_SESSION["name"]));
    }
    public function isCreator(){
        return (!empty($_SESSION["name"]) && 
        ($_SESSION['statut'] === "creator" || $_SESSION['statut'] === "admin"));
    }
    public function isAdmin(){
        return (!empty($_SESSION["name"]) && 
        ($_SESSION['statut'] === "admin"));
    }

}