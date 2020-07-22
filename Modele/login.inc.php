<?php
    session_start();

    include '../Config/config.inc.php';

	try {
		$bdd = new PDO($dbdsn, $dbusername, $dbpassword, array(PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION));
	} catch (Exception $e) {
		die('Erreur : ' . $e->getMessage());
	}
	if(isset($_POST['formLog'])){
		$pseudolog = htmlspecialchars($_POST['usernameLog']);
		$passwordlog = sha1($_POST['passwordLog']);
		if(!empty($pseudolog) AND !empty($passwordlog)){
			$requser = $bdd->prepare('SELECT * FROM utilisateur WHERE pseudo = ? AND password = ?');
			$requser->execute(array($pseudolog, $passwordlog));
			$userexist = $requser->rowCount();
			if($userexist == 1){
				$userinfo = $requser->fetch();
				$_SESSION['id'] = $userinfo['id'];
				$_SESSION['pseudo'] = $userinfo['pseudo'];
                $_SESSION['email'] = $userinfo['email'];
                $_SESSION['avatar'] = $userinfo['avatar'];
				header("Location: ../vue/acceuil.php?id=".$_SESSION['id']);
			}else{
				$error = "Incorrect USERNAME or PASSWORD";
			}
		}else{
			$error = "Complet the form please!";
		}
	}
?>