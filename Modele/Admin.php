<?php

require_once 'Framework/Modele.php';

class Admin extends Modele {

    public function connecter($login, $mdp) {
        $sql = "select ADMIN_ID from T_ADMIN where ADMIN_LOGIN=? and ADMIN_MDP=?";
        $utilisateur = $this->executerRequete($sql, array($login, $mdp));
        return ($utilisateur->rowCount() == 1);
    }


    public function getAdmin($login, $mdp) {
        $sql = "select ADMIN_ID as admin, ADMIN_LOGIN as login, ADMIN_MDP as mdp 
            from T_ADMIN where ADMIN_LOGIN=? and ADMIN_MDP=?";
        $utilisateur = $this->executerRequete($sql, array($login, $mdp));
        if ($utilisateur->rowCount() == 1)
            return $utilisateur->fetch();
        else
            throw new Exception("Aucun utilisateur ne correspond aux identifiants fournis");
    }

}
