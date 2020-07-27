<?php
    session_start();

    include 'config/config.php';

    try {
		$bdd = new PDO($dbdsn, $dbusername, $dbpassword, array(PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION));
	} catch (Exception $e) {
		die('Erreur : ' . $e->getMessage());
    }
    if(isset($_GET['id']) AND $_GET['id'] > 0){
        $getid = intval($_GET['id']);
        $requser = $bdd->prepare("SELECT * FROM utilisateur WHERE id = ?");
        $requser->execute(array($getid));
        $userinfo = $requser->fetch();
    }
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Header after connection</title>

    <link rel="stylesheet" href="src/css/style.css">
</head>
<body>
    <header>
        <div class='avatar'>
            <img src="user/avatar/<?php echo $userinfo['avatar']; ?>" alt="avatar" width='50'>
        </div>
        <div class='bouton'>
            <a href="index.php"><img src="https://www.google.com/url?sa=i&url=https%3A%2F%2Ffr.pngtree.com%2Ffreepng%2Fcool-man-shield--logo-vector_4129254.html&psig=AOvVaw0Hs6-I6qKZlxGWYueS4Wn2&ust=1595684875576000&source=images&cd=vfe&ved=0CAIQjRxqFwoTCIip7cSD5uoCFQAAAAAdAAAAABAD" alt="logo jepsen-brite"></a>
            <button class="buttonsearch"><i class="fas fa-search"></i></button>
            <a href="logout.php" class='buttonsignup'>Log out</a>
        </div>
    </header>
</body>
</html>