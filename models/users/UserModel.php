<?php

namespace Denwallo\models\users;

use Denwallo\models\PdoModel;
use PDO;


class UserModel extends PdoModel {

    public function createAccountDB($prenom, $nom, $telephone, $mail, $adresse, $hashed_password) {

        $req = "INSERT INTO user (prenom, nom, telephone, email, adresse, password, role) VALUES (:prenom, :nom, :telephone, :mail, :adresse, :password, 'client')";
        $stmt = $this->setDB()->prepare($req);
        $stmt->bindParam(":prenom", $prenom, PDO::PARAM_STR);
        $stmt->bindParam(":nom", $nom, PDO::PARAM_STR);
        $stmt->bindParam(":telephone", $telephone, PDO::PARAM_STR);
        $stmt->bindParam(":mail", $mail, PDO::PARAM_STR);
        $stmt->bindParam(":adresse", $adresse, PDO::PARAM_STR);
        $stmt->bindParam(":password", $hashed_password, PDO::PARAM_STR);
        $stmt->execute();
        $isCreate = ($stmt->rowCount() > 0);
        $stmt->closeCursor();
        return $isCreate;

    }

    public function getUserByMail($mail) {

        $req = "SELECT * FROM user WHERE email = :mail";
        $stmt = $this->setDB()->prepare($req);
        $stmt->bindParam(":mail", $mail, PDO::PARAM_STR);
        $stmt->execute();
        $row = $stmt->fetch(PDO::FETCH_ASSOC);
        $stmt->closeCursor();
        return $row;

    }

    public function isAccountValid($mail,$password) {

        $req = "SELECT password FROM user WHERE email = :mail";
        $stmt = $this->setDB()->prepare($req);
        $stmt->bindParam(":mail", $mail, PDO::PARAM_STR);
        $stmt->execute();
        $passwordDB = $stmt->fetch(PDO::FETCH_ASSOC);
        $stmt->closeCursor();
        return password_verify($password,$passwordDB['password']);

    }

    // public function deleteAccountDB($name) {

    //     $req = 'DELETE FROM utilisateurs WHERE name = :name';
    //     $stmt = $this->setDB()->prepare($req);
    //     $stmt->bindParam(':name', $name, PDO::PARAM_STR);
    //     $stmt->execute();
    //     $stmt->closeCursor();
    //     return true;

    // }


}