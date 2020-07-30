<?php
if(!isset($_SESSION)){
    session_start();
}


    include 'config/config.php';
    
	try {
		$bdd = new PDO($dbdsn, $dbusername, $dbpassword, array(PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION));
	} catch (Exception $e) {
		die('Erreur : ' . $e->getMessage());
    }
    if(isset($_POST['formInscription'])){
        if(!empty($_POST['title']) AND !empty($_POST['description']) AND !empty($_POST['password']) AND !empty($_POST['confirmpassword'])){
            $pseudo = htmlspecialchars($_POST['pseudo']);
            $email = htmlspecialchars($_POST['email']);
            $password = sha1($_POST['password']);
            $confirm_password = sha1($_POST['confirmpassword']);
            $defaultAvatar = "default.jpeg";

            $pseudolength = strlen($pseudo);
            if($pseudolength <= 20){
                $reqpseudo = $bdd->prepare("SELECT * FROM utilisateur WHERE pseudo = ?");
                $reqpseudo->execute(array($pseudo));
                $pseudoexist = $reqpseudo->rowCount();
                if($pseudoexist == 0){
                    if(filter_var($email, FILTER_VALIDATE_EMAIL)){
                        $reqmail = $bdd->prepare("SELECT * FROM utilisateur WHERE mail = ?");
                        $reqmail->execute(array($email));
                        $mailexist = $reqmail->rowCount();
                        if($mailexist == 0){
                            if($password == $confirm_password){
                                $insertMember = $bdd->prepare("INSERT INTO utilisateur(pseudo, password, mail, avatar) VALUE (:pseudo, :password, :mail, :avatar)");
                                $insertMember->execute(array(
                                    'pseudo' => $pseudo,
                                    'password' => $password,
                                    'mail' => $email,
                                    'avatar' => $defaultAvatar
                                ));
                                $done = "Event create!";
                            }
                        }
                    }
                }
            }
        }
    }
?>

<html>
<head>
<title>create event</title>
<link rel="stylesheet" href="src/css/style.css">
</head>
<body>
<?php 
    if(isset($_GET['id']) AND $_GET['id'] == $_SESSION['id']){
        include("layout/header.php");
    }else{
        include("layout/header.inc.php");
    }
?>

<main>
<h2 class="Titre-h2 h2center">Nouvel événement</h2>
<input type="text" class="title_input"placeholder="Titre" name='title'></input>
<input type="text" class="descr_input"placeholder="insérez votre description ici" name='description'></input>
<input type="file" class="title_input" name='image'></input>
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
<input type=submit class="title_input" name="createEvent"></input>
</main>
<?php include("layout/footer.inc.php");?>

<script src="https://kit.fontawesome.com/1815b8a69b.js" crossorigin="anonymous"></script>
</body>
</html>