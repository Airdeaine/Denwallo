<?php

if (empty($url[1])) {
    $url[1] = "dashboard";
}

switch ($url[1]) {

    case "dashbord":
        $adminController->adminPage();
        break;

    case 'adminProduit':
        $adminController->produitPage();
        break;

    case 'ajouterProduit':
        $adminController->addProduitPage();
        break;

    case 'nouveauProduit':

        $marque = htmlspecialchars($_POST['marque']);
        $modele = htmlspecialchars($_POST['modele']);
        $image = htmlspecialchars($_POST['image']);
        $stockage = htmlspecialchars($_POST['stockage']);
        $couleur = htmlspecialchars($_POST['couleur']);
        $os = htmlspecialchars($_POST['os']);
        $ram = htmlspecialchars($_POST['ram']);
        $resolution = htmlspecialchars($_POST['resolution']);
        $taille = htmlspecialchars($_POST['taille']);
        $prix = htmlspecialchars($_POST['prix']);

        if (
            empty($marque) || empty($modele) || empty($image) || empty($stockage)
            || empty($couleur) || empty($os) || empty($ram) || empty($resolution) || empty($taille) || empty($prix)
        ) {
            throw new Exception('Tous les champs sont obligatoire !');
        }

        $produitController->createProduit($marque, $modele, $image, $stockage, $couleur, $os, $ram, $resolution, $taille, $prix);
        break;

    case 'modifierProduit':
        $id = $_POST['id'];
        $mainController->updateProduit($id);
        break;

    case 'updateProduitDB':
        
        $id = $_POST['id'];
        $marque = htmlspecialchars($_POST['marque']);
        $modele = htmlspecialchars($_POST['modele']);
        $image = htmlspecialchars($_POST['image']);
        $stockage = htmlspecialchars($_POST['stockage']);
        $couleur = htmlspecialchars($_POST['couleur']);
        $os = htmlspecialchars($_POST['os']);
        $ram = htmlspecialchars($_POST['ram']);
        $resolution = htmlspecialchars($_POST['resolution']);
        $taille = htmlspecialchars($_POST['taille']);
        $prix = htmlspecialchars($_POST['prix']);

         if (
            empty($marque) || empty($modele) || empty($image) || empty($stockage)
            || empty($couleur) || empty($os) || empty($ram) || empty($resolution) || empty($taille) || empty($prix)
        ) {
            throw new Exception('Tous les champs sont obligatoire !');
        }

        $produitController->updateProduit($id,$marque, $modele, $image, $stockage, $couleur, $os, $ram, $resolution, $taille, $prix);
        break;

    case 'detail_produit':
        $id = $_POST['id'];
        $mainController->detailsAdminPage($id);
        break;

    case "logout":

        $adminController->logout();
        break;

    // case "deleteAccount":

    //     $usersControllers->deleteAccount();
    //     break;

    default:
        throw new Exception("La page d'utilisateur demander n'existe pas.");

}