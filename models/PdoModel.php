<?php

namespace Denwallo\models;

use PDO;

require_once("./models/infoDB.php");
abstract class PdoModel {
    protected static $pdo;

    protected static function setDB() {

        if (self::$pdo === null) {
        self::$pdo = new PDO("mysql:host=".mysql.";dbname=".dbname,user,password,
        [PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION]);
        self::$pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        }
        return self::$pdo;
    }
}