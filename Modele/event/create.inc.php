<?php
    include '../../Config/config.inc.php';
    
	try {
		$bdd = new PDO($dbdsn, $dbusername, $dbpassword, array(PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION));
	} catch (Exception $e) {
		die('Erreur : ' . $e->getMessage());
    }

    $reqtitre = $bdd->prepare("SELECT * FROM evenement WHERE titre = ?");
    $reqtitre->execute(array($titre));
    
    $reqauteur = $bdd->prepare("SELECT * FROM evenement WHERE auteur = ?");
    $reqauteur->execute(array($auteur));

    $reqdate = $bdd->prepare("SELECT * FROM evenement WHERE date = ?");
    $reqdate->execute(array($date));

    $reqtime = $bdd->prepare("SELECT * FROM evenement WHERE time = ?");
    $reqtime->execute(array($time));

    $reqimage = $bdd->prepare("SELECT * FROM evenement WHERE image = ?");
    $reqimage->execute(array($image));

    $reqdescription = $bdd->prepare("SELECT * FROM evenement WHERE description = ?");
    $reqdescription->execute(array($description));

    $reqcategorie = $bdd->prepare("SELECT * FROM evenement WHERE categorie = ?");
    $reqcategorie->execute(array($categorie));
    
    $insertMember = $bdd->prepare("INSERT INTO evenement(titre, auteur, date, time, image, description, categorie) VALUE (:titre, :auteur, :date, :time, :image, :description, :categorie)");
    $insertMember->execute(array(
        'titre' => $titre,
        'auteur' => $auteur,
        'date' => $date,
        'time' => $time,
        'image' => $image,
        'description' => $description,
        'categorie' => $categorie
    ));

?>