<?php

    if(!isset($_SESSION)){
        session_start();
    }
    include('config/config.php');

    try
    {
    	$bdd = new PDO($dbdsn, $dbusername, $dbpassword, array(PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION));
    }
    catch(Exception $e)
    {
            die('Erreur : '.$e->getMessage());
    }
    if(isset($_POST['formEvent'])){
        if(!empty($_POST['titre']) AND !empty($_POST['auteur']) AND !empty($_POST['description'])){
            $titre = htmlspecialchars($_POST['titre']);
            $auteur = htmlspecialchars($_POST['auteur']);
            $date = $_POST['date'];
            $time = $_POST['time'];
            $description = htmlspecialchars($_POST['description']);
            $concert = $_POST['concert'];
            $culture = $_POST['culture'];
            $manifestation = $_POST['manifestation'];
            $id_user = $_SESSION['id'];
            $uploadImage = $bdd->prepare('INSERT INTO evenement(titre, auteur, date, time, description, categorie, id_user) VALUES(:titre, auteur, :date, :time, :description, :categorie, :id_user)');
                            $uploadImage->execute(array(
                                'titre' => $titre,
        	                    'auteur' => $auteur,
        	                    'date' => $date,
        	                    'time' => $time,
        	                    // 'image' => str_replace(' ', '_', $titre).".".$extensionUpload,
        	                    'description' => $description,
                                'categorie' => $concert OR $culture OR $manifestation,
                                'id_user' => $id_user
                            ));
            // if(isset($_FILES['image']) AND !empty($_FILES['image']['name'])){
            //     $tailleMax = 2097152;
            //     $extensoinValide = array('jpg', 'jpeg', 'png', 'gif');
            //     if($_FILES['image']['size'] <= $tailleMax){
            //         $extensionUpload = strtolower(substr(strrchr($_FILES['image']['name'], '.'), 1));
            //         if(in_array($extensionUpload, $extensoinValide)){
            //             $cheminImage = "event/". str_replace(' ', '_', $titre).".".$extensionUpload;
            //             $resultatImage = move_uploaded_file($_FILES['image']['tmp_name'], $cheminImage);
            //             if($resultatImage){
            //                 $uploadImage = $bdd->prepare('INSERT INTO evenement(titre, auteur, date, time, image, description, categorie, id_user) VALUES(:titre, auteur, :date, :time, :image, :description, :categorie, :id_user)');
            //                 $uploadImage->execute(array(
            //                     'titre' => $titre,
        	//                     'auteur' => $auteur,
        	//                     'date' => $date,
        	//                     'time' => $time,
        	//                     'image' => str_replace(' ', '_', $titre).".".$extensionUpload,
        	//                     'description' => $description,
            //                     'categorie' => $concert || $culture || $manifestation,
            //                     'id_user' => $id_user
            //                 ));
            //                 header('Location: user.php?id='. $_SESSION['id']);
            //             }else{
            //                 $error = 'Error during import file';
            //             }
            //         }else{
            //             $error = 'The image format must be in JPG, JPEG, PNG or GIF';
            //         }
            //     }else{
            //         $error = 'Your IMAGE is so big';
            //     } 
            // }else{
            //     $error = 'Pas image!';
            // }
        }else{
            $error = 'Complet the form!';
        }
    }
?>

<html>
<head>
<title>create event</title>
<link rel="styilesheet" href="src/css/style.css">
</head>
<body>
<?php 
    include("layout/header.php");
?>

<main>
<form method="post" action="" style="margin-top:0;">
<h2 class="Titre-h2 h2center">Nouvel événement</h2>
<input type="text" name='auteur' class="title_input"placeholder="auteur">
<input type="text" name='titre' class="title_input"placeholder="Titre">
<input type="date" name='date' class="title_input">
<input type="time" name='time' class="title_input">
<input type="text" name="description" class='descr_input' placeholder='insérez votre description ici'>
<input type="file" name='image' class="title_input">
<table class="check_cat">
	<tr>
		<th>
			quelle(s) catégorie(s)?
		</th>
	</tr>
	<tr>
		<td>
	<div><input type="checkbox" id="concert" name="concert"><label for="concert">concert</label></div>
	</td>
	<td>
<div><input type="checkbox" id="culture" name="culture"><label for="culture">culture</label></div>
</td>
<td>
<div><input type="checkbox" id="manifestation" name="manifestation"><label for="manifestation">manifestation</label></div>
</td>
</tr>
</table>
<input type=submit class="title_input" name='formEvent'></input>
</form>
<?php
        if(isset($error)){
    ?>
        <div class="error">
            <p><i class="fas fa-times"></i> <?php echo $error ?> <i class="fas fa-times"></i></p>
        </div>
    <?php
        }
    ?>
</main>
<?php include("layout/footer.inc.php");?>

<script src="https://kit.fontawesome.com/1815b8a69b.js" crossorigin="anonymous"></script>
</body>
</html>
