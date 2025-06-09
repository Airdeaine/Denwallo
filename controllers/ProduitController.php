<?php

namespace Denwallo\controllers;

use Denwallo\controllers\Controller;
use Exception;

class ProduitController extends Controller
{

    public function createProduit($marque, $modele, $image, $stockage, $couleur, $os, $ram, $resolution, $taille, $prix)
    {

        if ($this->produitModel->createProduitDB($marque, $modele, $image, $stockage, $couleur, $os, $ram, $resolution, $taille, $prix)) {
            header("Location:" . ROOT . "admin/adminProduit");
            exit;
        } else {
            throw new Exception("Impossible de créer le personnage !");
        }

    }

    public function updateProduit($id,$marque, $modele, $image, $stockage, $couleur, $os, $ram, $resolution, $taille, $prix)
    {

        if ($this->produitModel->updateProduitDB($id,$marque, $modele, $image, $stockage, $couleur, $os, $ram, $resolution, $taille, $prix)) {
            header("Location:" . ROOT . "admin/adminProduit");
            exit;
        } else {
            throw new Exception("Impossible de créer le personnage !");
        }

    }

}
