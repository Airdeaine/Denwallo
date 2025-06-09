<?php

namespace Denwallo\controllers\users;

use Denwallo\controllers\Controller;
use Exception;

class UserController extends Controller
{

    public function loginPage()
    {

        if (!$this->isConnected()) {

            $datas_page = [
                "title" => "Connexion",
                "description" => "Page de connexion",
                "view" => "./views/pages/users/loginPage.php",
                "layout" => "./views/components/layout.php",
                "isClient" => $this->isClient(),
                "isAdmin" => $this->isAdmin()
            ];
            $this->renderPage($datas_page);

        } else {

            header("Location:" . ROOT . "accueil");

        }

    }
    public function registerPage()
    {

        if (!$this->isConnected()) {

            $datas_page = [
                "title" => "Inscription",
                "description" => "Page d'inscription",
                "view" => "./views/pages/users/registerPage.php",
                "layout" => "./views/components/layout.php",
                "isClient" => $this->isClient(),
                "isAdmin" => $this->isAdmin()
            ];
            $this->renderPage($datas_page);

        } else {

            header("Location:" . ROOT . "accueil");

        }

    }

    public function createAccount($prenom, $nom, $telephone, $mail, $adresse, $password)
    {

        $hashed_password = password_hash($password, PASSWORD_DEFAULT);

        if (!$this->userModel->getUserByMail($mail)) {
            if (
                $this->userModel->createAccountDB(
                    $prenom,
                    $nom,
                    $telephone,
                    $mail,
                    $adresse,
                    $hashed_password
                )
            ) {
                header("Location:" . ROOT . "compte/connexion");
            } else {
                header("Location:" . ROOT . "compte/inscription");
            }
        } else {
            throw new Exception("Cette email a déjà été utilisé");
        }

    }

    public function login($mail, $password)
    {
        $dataUser = $this->userModel->getUserByMail($mail);

        if ($this->userModel->isAccountValid($mail, $password)) {

            $_SESSION['mail'] = $dataUser['email'];
            $_SESSION['role'] = $dataUser['role'];
            // showArray($_SESSION);

            if ($_SESSION['role'] === 'client') {
                header('Location:' . ROOT . 'accueil');
            } elseif ($_SESSION['role'] === 'admin') {
                header('Location:' . ROOT . 'admin/dashbord');
            } else {
                throw new Exception("Vous n'avez pas de rôle");
            }

        } else {

            header('Location:' . ROOT . 'compte/connexion');

        }
    }

    public function logout()
    {
        session_destroy();
        header('Location:' . ROOT . 'accueil');
    }


}