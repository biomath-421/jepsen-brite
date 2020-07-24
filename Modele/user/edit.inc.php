<?php
    session_start();

    include '../../Config/config.inc.php';

    try {
		$bdd = new PDO($dbdsn, $dbusername, $dbpassword, array(PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION));
	} catch (Exception $e) {
		die('Erreur : ' . $e->getMessage());
    }
    // if(isset($_SESSION['id'])){
    //     var_dump($_SESSION['id']);
        $requser = $bdd->prepare("SELECT * FROM utilisateur WHERE id = ?");
        $requser->execute(array($_SESSION['id']));
        $useredit = $requser->fetch();
        // if(isset($_FILES['avatar']) AND !empty($_FILES['avatar']['name'])){
        //     $tailleMax = 2097152;
        //     $extensoinValide = array('jpg', 'jpeg', 'png', 'gif');
        //     if($_FILES['avatar']['size'] <= $tailleMax){
        //         $extensionUpload = strtolower(substr(strrchr($_FILES['avatar']['name'], '.'), 1));
        //         if(in_array($extensionUpload, $extensoinValide)){
        //             $chemin = "../../user/avatar/".$_SESSION['id'].".".$extensionUpload;
        //             $resultat = move_uploaded_file($_FILES['avatar']['tmp_name'], $chemin);
        //             if($resultat){
                        $updateAvatar = $bdd->prepare('UPDATE utilisateur SET avatar = :avatar WHERE id = :id');
                        $updateAvatar->execute(array(
                            'avatar' => $_SESSION['id'].".".$extensionUpload,
                            'id' => $_SESSION['id']
                        ));
        //                 header('Location: ../../Vue/profil.inc.php');
        //             }else{
        //                 $error = 'Error during import file';
        //             }
        //         }else{
        //             $error = 'The image format must be in JPG, JPEG, PNG or GIF';
        //         }
        //     }else{
        //         $error = 'Your AVATAR is so big';
        //     } 
        // }
        // if(isset($_POST['newpseudo']) AND !empty($_POST['newpseudo']) AND $_POST['newpseudo'] != $useredit['pseudo']){
        //     $newpseudo = htmlspecialchars($_POST['newpseudo']);
            $insertpseudo = $bdd->prepare("UPDATE utilisateur SET pseudo = ? WHERE id = ?");
            $insertpseudo->execute(array($newpseudo, $_SESSION['id']));
            // header('Location: ../Vue/profil.inc.php?id='.$_SESSION["id"]);
        // }
        // if(isset($_POST['newemail']) AND !empty($_POST['newemail']) AND $_POST['newemail'] != $useredit['email']){
        //     $newemail = htmlspecialchars($_POST['newemail']);
            $insertemail = $bdd->prepare("UPDATE utilisateur SET email = ? WHERE id = ?");
            $insertemail->execute(array($newemail, $_SESSION['id']));
            // header('Location: ../../Vue/profil.inc.php?id='.$_SESSION["id"]);
        // }
        // if(isset($_POST['newpassword']) AND !empty($_POST['newpassword']) AND isset($_POST['confirmnewpassword']) AND !empty($_POST['confirmnewpassword'])){
        //     $newpassword = sha1($_POST['newpassword']);
        //     $confirmnewpassword = sha1($_POST['confirmnewpassword']);
        //     if($newpassword == $confirmnewpassword){
                $insertpassword = $bdd->prepare("UPDATE utilisateur SET password = ? WHERE id = ?");
                $insertpassword->execute(array($newpassword, $_SESSION['id']));
                // header('Location: ../../Vue/profil.inc.php?id='.$_SESSION["id"]);
    //         }else{
    //             $error = "Your PASSWORD doesn't match!";
    //         }
    //     }
    //     header("Location: ../../Vue/edit.inc.php");
    // }else{
    //     header("Location: ../../Vue/profil.inc.php");
    // }
?>

