<?php
    include '../Config/config.inc.php';
    
	try {
		$bdd = new PDO($dbdsn, $dbusername, $dbpassword, array(PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION));
	} catch (Exception $e) {
		die('Erreur : ' . $e->getMessage());
    }
    if(isset($_POST['formInscription'])){
        if(!empty($_POST['username']) AND !empty($_POST['email']) AND !empty($_POST['password']) AND !empty($_POST['confirm_password']) AND !empty($_POST['avatar'])){
            $pseudo = htmlspecialchars($_POST['username']);
            $email = htmlspecialchars($_POST['email']);
            $password = sha1($_POST['password']);
            $confirm_password = sha1($_POST['confirm_password']);
            $avatar = $_POST['avatar'];

            $pseudolength = strlen($pseudo);
            if($pseudolength <= 20){
                $reqpseudo = $bdd->prepare("SELECT * FROM utilisateur WHERE pseudo = ?");
                $reqpseudo->execute(array($pseudo));
                $pseudoexist = $reqpseudo->rowCount();
                if($pseudoexist == 0){
                    if(filter_var($email, FILTER_VALIDATE_EMAIL)){
                        $reqmail = $bdd->prepare("SELECT * FROM utilisateur WHERE email = ?");
                        $reqmail->execute(array($email));
                        $mailexist = $reqmail->rowCount();
                        if($mailexist == 0){
                            if($password == $confirm_password){
                                $insertMember = $bdd->prepare("INSERT INTO utilisateur(pseudo, password, email, avatar) VALUE (:pseudo, :password, :email, :avatar)");
                                $insertMember->execute(array(
                                    'pseudo' => $pseudo,
                                    'password' => $password,
                                    'email' => $email,
                                    'avatar' => $avatar
                                ));
                                $done = "Your account is done!";

                            }else{
                                $error = "Your PASSWORD doesn't match!";
                            }
                        }else{
                            $error = "This EMAIL alrady exists!";
                        }
                    }else{
                        $error = "Your EMAIL isn't valide!";
                    }
                }else{
                    $error = "This USERNAME alrady exists!";
                }
            }else{
                $error = "Your PSEUDO is too long!";
            }
        }else{
            $error = "Complet form please!";
        }
    }
?>