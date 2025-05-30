<?php

if(empty($url[1])) {
    $url[1] = "connexionAdmin";
}

switch ($url[1]) {

    case "connexionAdmin":
        $adminController->loginAdminPage();
        break;

    // case "register":
    //     // showArray($_POST);
    //     $name = htmlspecialchars($_POST["name"]);
    //     $password = htmlspecialchars($_POST["password"]);

    //     if(empty($name) || empty($password)) {
    //         throw new Exception("Veuillez remplir tous les champs");
    //     }
    //     $usersControllers->createAccount($name, $password);
    //     break;

    case 'adminPage':
        $adminController->adminPage();
        break;

    case 'adminProduit':
        $adminController->produitPage();
        break;
    
    case 'ajouterProduit':
        $adminController->addProduitPage();
        break;

    // case 'login':
    //     // showArray($_POST);
    //     $name = htmlspecialchars($_POST["name"]);
    //     $password = htmlspecialchars($_POST["password"]);

    //     if(empty($name) || empty($password)) {
    //         throw new Exception("Veuillez remplir tous les champs");
    //     }
    //     $usersControllers->login($name, $password);
    //     break;

    // case "profil":
    //     $usersControllers->profilPage();
    //     break;

    case "logout":

        $adminController->logout();
        break;

    // case "deleteAccount":
        
    //     $usersControllers->deleteAccount();
    //     break;
    
    default:
        throw new Exception("La page d'utilisateur demander n'existe pas.");

}