<?php
    include '../../Config/config.inc.php';

    try {
		$bdd = new PDO($dbdsn, $dbusername, $dbpassword, array(PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION));
	} catch (Exception $e) {
		die('Erreur : ' . $e->getMessage());
    }
    if(isset($_GET['id']) AND $_GET['id'] > 0){
        $getidEvent = intval($_GET['id']);
        $requserEvent = $bdd->prepare("SELECT * FROM evenement WHERE id = ?");
        $requserEvent->execute(array($getidEvent));
        $eventinfo = $requserEvent->fetch();

        header("Location: ../../Vue/profil.php");
    }
?>


<!-- Afficher image dans profil-->

<?php
    if(!empty($userinfo['avatar'])){
?>
        <img src="../../event/image/<?php echo $eventinfo['image']; ?>" alt="image" width='150'>
<?php
    }
?>