<?php

use PHPUnit\Framework\TestCase;
use Denwallo\models\ProduitModel;

class ProduitTest extends TestCase {

    private $produit;

    protected function setUp(): void {
        $this->produit = new ProduitModel(); 
    }

    public function testUpdateProduitDB() {
        //on insere un produit dans la base pour le test
        $this->produit->setDB()->exec("
            INSERT INTO produits (id, marque, modele, image, stockage, couleur, os, ram, resolution, taille, prix)
            VALUES (94, 'testMarque', 'testModele', 'test.jpg', 64, 'Noir', 'Android', '4Go', '1080p', '6', '299.99')
        ");

        //on modifie ce produit
        $result = $this->produit->updateProduitDB(
            94, 'Apple', 'iPhone 13', 'iphone13.jpg', 
            128, 'Blanc', 'iOS', '6Go', '1170x2532', 
            '6', '899.99'
        );

        //on verifie le resultat retourner
        $this->assertTrue($result);

        //on verifie que la base est bien modifiee
        $stmt = $this->produit->setDB()->prepare("SELECT * FROM produits WHERE id = 94");
        $stmt->execute();
        $produit = $stmt->fetch(PDO::FETCH_ASSOC);

        $this->assertEquals('Apple', $produit['marque']);
        $this->assertEquals('iPhone 13', $produit['modele']);
        $this->assertEquals('899.99', $produit['prix']);

        //on supprime le produit de test
        $this->produit->setDB()->exec("DELETE FROM produits WHERE id = 94");
    }
}