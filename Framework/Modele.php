<?php

require_once 'Configuration.php';

abstract class Modele {

    private static $bdd;
    private $options = array(PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION));

    protected function executerRequete($sql, $params = null) {
        if ($params == null) {
            $resultat = self::getBdd()->query($sql);
        } else {
            $resultat = self::getBdd()->prepare($sql);
            $resultat->execute($params);
        }
        return $resultat;
    }

    private static function getBdd() {
        if (self::$bdd === null) {
            $dsn = Configuration::get("dsn");
            $login = Configuration::get("login");
            $mdp = Configuration::get("mdp");
            self::$bdd = new PDO($dsn, $login, $mdp, $this->options;
        }
        return self::$bdd;
    }
}
