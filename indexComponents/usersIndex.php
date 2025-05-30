<?php

if(empty($url[1])) {
    $url[1] = "connexion";
}

switch ($url[1]) {

    case "inscription":
        $userController->registerPage();
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

    case 'connexion':
        $userController->loginPage();
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

    // case "logout":

    //     $usersControllers->logout();
    //     break;

    // case "deleteAccount":
        
    //     $usersControllers->deleteAccount();
    //     break;
    
    default:
        throw new Exception("La page d'utilisateur demander n'existe pas.");

}