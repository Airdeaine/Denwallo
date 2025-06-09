<?php

if(empty($url[1])) {
    $url[1] = "connexion";
}

switch ($url[1]) {

    case "inscription":
        $userController->registerPage();
        break;

    case "register":
        // showArray($_POST);
        $prenom = htmlspecialchars($_POST["prenom"]);
        $nom = htmlspecialchars($_POST["nom"]);
        $telephone = htmlspecialchars($_POST["telephone"]);
        $mail = htmlspecialchars($_POST["mail"]);
        $adresse = htmlspecialchars($_POST["adresse"]);
        $password = htmlspecialchars($_POST["password"]);

        if(empty($prenom) || empty($nom) || empty($telephone) || empty($mail) || empty($adresse) || empty($password) ) {
            throw new Exception("Veuillez remplir tous les champs");
        }
        $userController->createAccount($prenom, $nom, $telephone, $mail, $adresse, $password);
        break;

    case 'connexion':
        $userController->loginPage();
        break;

    case 'login':
        $mail = htmlspecialchars($_POST["mail"]);
        $password = htmlspecialchars($_POST["password"]);

        if(empty($mail) || empty($password)) {
            throw new Exception("Veuillez remplir tous les champs");
        }
        $userController->login($mail, $password);
        break;

    // case "profil":
    //     $usersControllers->profilPage();
    //     break;

    case "logout":

        $userController->logout();
        break;

    // case "deleteAccount":
        
    //     $usersControllers->deleteAccount();
    //     break;
    
    default:
        throw new Exception("La page d'utilisateur demander n'existe pas.");

}