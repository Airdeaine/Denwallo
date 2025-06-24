<?php


require("vendor/autoload.php");
use Denwallo\controllers\MainController;
use Denwallo\controllers\users\UserController;
use Denwallo\controllers\users\AdminController;
use Denwallo\controllers\ProduitController;



session_start();

define("ROOT", str_replace("index.php", "", (isset($_SERVER['HTTPS']) ? "https" : "http") . "://" . $_SERVER['HTTP_HOST'] . $_SERVER["PHP_SELF"]));

if (empty($_GET['page'])) {
    $url[0] = "accueil";
} else {
    $url = explode("/", filter_var($_GET["page"], FILTER_SANITIZE_URL));
}

$mainController = new MainController();
$userController = new UserController();
$adminController = new AdminController();
$produitController = new ProduitController();

function showArray($array) {
    echo"<pre>";
    print_r($array);
    echo"</pre>";
}


try {
    switch ($url[0]) {

        case "accueil":
            $mainController->homePage();
            showArray($_SESSION);
            break;

        case "nos_smartphone":
            $mainController->smartphonePage();
            break;

        case "panier":
            $mainController->panierPage();
            break;

        case "monespace":
            $mainController->espacePage();
            break;

        case "contact":
            $mainController->contactPage();
            break;         

        case "listeProduit":

            if (empty($url[1])) {
                $mainController->produitPage();
            }

            if (!empty($url[1])) {
                switch ($url[1]) {
                    case 'detailProduit':
                        $id = $_POST['id'];
                        $mainController->detailsPage($id);
                        break;

                    default:
                        throw new Exception("Le produit n'existe pas");
            }
            }

            break;

        case "admin":

            require_once("./indexComponents/adminIndex.php");
            break;

        case "compte":

            require_once("./indexComponents/usersIndex.php");
            break;

        default:
            throw new Exception("La page n'existe pas");
    }
} catch (Exception $e) {
    echo "Erreur :" . $e->getMessage();
}