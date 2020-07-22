<?php
    session_start();

    include '../Config/config.inc.php';

    try {
		$bdd = new PDO($dbdsn, $dbusername, $dbpassword, array(PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION));
	} catch (Exception $e) {
		die('Erreur : ' . $e->getMessage());
    }
    if(isset($_GET['id']) AND $_GET['id'] > 0){
        $getid = intval($_GET['id']);
        $requser = $bdd->prepare("SELECT * FROM membre WHERE id = ?");
        $requser->execute(array($getid));
        $userinfo = $requser->fetch();

        header("Location: ../vue/profil.php");
    }
?>