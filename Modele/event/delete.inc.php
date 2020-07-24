<?php 
    session_start();

    include '../../Config/config.inc.php';

	try {
		$bdd = new PDO($dbdsn, $dbusername, $dbpassword, array(PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION));
	} catch (Exception $e) {
		die('Erreur : ' . $e->getMessage());
    }
    
    $delete = $bdd->prepare('DELETE FROM evenement WHERE id=:num LIMIT 1');
    $delete->execute(array('num' => $_SESSION['id']));
    var_dump($_SESSION['id']);

?>