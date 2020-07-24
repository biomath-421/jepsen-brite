<?php
    include '../Config/config.inc.php'; 

    try {
        $bdd = new PDO($dbdsn, $dbusername, $dbpassword, array(PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION));
    } catch (Exception $e) {
        die('Erreur : ' . $e->getMessage());
    }

    $acceuil = $bdd->query("SELECT * FROM evenement WHERE categorie = ? ORDER BY date, time LIMIT 25");
    $acceuil->execute(array($_POST['categorie']));
    while($acceuilVue = $acceuil->fetch()){
        echo '<p>' . $acceuilVue['titre'] . '</p>';
    }
?>