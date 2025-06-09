<?php

namespace Denwallo\models;

use Denwallo\models\PdoModel;
use PDO;

class ProduitModel extends PdoModel {

    public function getAllPhones() {
        $req = "SELECT * FROM produits";
        $stmt = $this->setDB()->prepare($req);
        $stmt->execute();
        $result = $stmt->fetchAll(PDO::FETCH_ASSOC);
        $stmt->closeCursor();
        return $result;
    }

    public function createProduitDB($marque, $modele, $image, $stockage, $couleur, $os, $ram, $resolution, $taille, $prix){

        $req="INSERT INTO produits (marque, modele, image, stockage, couleur, os, ram, resolution, taille, prix)
        VALUES (:marque, :modele, :image, :stockage, :couleur, :os, :ram, :resolution, :taille, :prix)";
        $stmt = $this->setDB()->prepare($req);
        $stmt->bindParam(":marque", $marque, PDO::PARAM_STR);
        $stmt->bindParam(":modele", $modele, PDO::PARAM_STR);
        $stmt->bindParam(":image", $image, PDO::PARAM_STR);
        $stmt->bindParam(":stockage", $stockage, PDO::PARAM_INT);
        $stmt->bindParam(":couleur", $couleur, PDO::PARAM_STR);
        $stmt->bindParam(":os", $os, PDO::PARAM_STR);
        $stmt->bindParam(":ram", $ram, PDO::PARAM_STR);
        $stmt->bindParam(":resolution", $resolution, PDO::PARAM_STR);
        $stmt->bindParam(":taille", $taille, PDO::PARAM_STR);
        $stmt->bindParam(":prix", $prix, PDO::PARAM_STR);
        $stmt->execute();
        $stmt->closeCursor();
        return true;
        
    }

    public function getPhoneById($id) {
        $req="SELECT * FROM produits WHERE id = :id";
        $stmt = $this->setDB()->prepare($req);
        $stmt->bindParam(":id", $id, PDO::PARAM_INT);
        $stmt->execute();
        $result = $stmt->fetch(PDO::FETCH_ASSOC);
        $stmt->closeCursor();
        return $result;
    }

    public function updateProduitDB($id,$marque, $modele, $image, $stockage, $couleur, $os, $ram, $resolution, $taille, $prix) {
    
        $req= "UPDATE produits SET marque = :marque, modele = :modele, image = :image, stockage = :stockage,
        couleur = :couleur, os = :os, ram = :ram, resolution = :resolution, taille = :taille, prix = :prix WHERE id = :id";
        $stmt = $this->setDB()->prepare($req);
        $stmt->bindParam(":id", $id, PDO::PARAM_INT);
        $stmt->bindParam(":marque", $marque, PDO::PARAM_STR);
        $stmt->bindParam(":modele", $modele, PDO::PARAM_STR);
        $stmt->bindParam(":image", $image, PDO::PARAM_STR);
        $stmt->bindParam(":stockage", $stockage, PDO::PARAM_INT);
        $stmt->bindParam(":couleur", $couleur, PDO::PARAM_STR);
        $stmt->bindParam(":os", $os, PDO::PARAM_STR);
        $stmt->bindParam(":ram", $ram, PDO::PARAM_STR);
        $stmt->bindParam(":resolution", $resolution, PDO::PARAM_STR);
        $stmt->bindParam(":taille", $taille, PDO::PARAM_STR);
        $stmt->bindParam(":prix", $prix, PDO::PARAM_STR);
        $stmt->execute();
        $stmt->closeCursor();
        return true;
    
    }





}
