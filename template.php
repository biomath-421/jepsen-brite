<html>
<head>
    <title>template</title>
    <link rel="stylesheet" href="src/css/template.css">
</head>
<body>

<section class="article">

    <i class="fab fa-readme buttonsection"></i>
    <i class="fas fa-pen buttonsection"></i>
    <i class="fas fa-trash buttonsection"></i>
<?php
// modification d'un événement
try
{
	$bdd = new PDO('mysql:host=localhost;dbname=jepsens-brite;charset=utf8', '$dbusername', '$dbpassword');
}
catch(Exception $e)
{
        die('Erreur : '.$e->getMessage());
}
$req = $bdd->prepare('INSERT INTO evenement(titre, auteur, date, time, image, description, categorie, id_user) VALUES(:titre, auteur, :date, :time, :image, :description, :categorie, :id_user)');
$req->execute(array(
	'titre' => $titre,
	'auteur' => $auteur,
	'date' => $date,
	'time' => $time,
	'image' => $image,
	'description' => $description,
    'categorie' => $categorie,
    'id_user' => $id_user
	));
echo $titre;
echo $auteur;
echo $date;
echo $time;
echo $image;
echo $description;
echo $categorie;
echo $id_user;
?>
    <h2>modification d'un artiste</h2>
    <p>Etes-vous sur de vouloir supprimer cet artiste ?</p>
    <input method="post" action="event.php">
    <h2 class="Titre-h2 h2center">Nouvel événement</h2>
    <input type="text" id='auteur' class="title_input"placeholder="auteur"></input>
    <input type="text" id='titre' class="title_input"placeholder="Titre"></input>
    <input type="date" id='date' class="title_input"></input>
    <input type="time" id='time' class="title_input"></input>
    <input type="text" id="description' class="descr_input"placeholder="insérez votre description ici"></input>
    <input type="file" id='image' class="title_input"></input>
    <input type="number" id="id_user" class="title_input"></input>
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
    <input type=submit class="title_input"></input>
    </form>
    //  suppression d'un événement
    <h2>Supression d'un événement</h2>
	<p>Etes-vous sur de vouloir supprimer cet événement ?</p>
    <?php
    try
    {
        $bdd = new PDO('mysql:host=localhost;dbname=jepsens-brite;charset=utf8', '$dbusername', '$dbpassword');
    }
    catch(Exception $e)
    {
        die('Erreur : '.$e->getMessage());
    }
    $req = $bdd->query('delete from evenement where id='.$_GET["id"]);
    ?>
<?php
	$id=$_GET["id"];
?>
	<form method="post" action="index.php?id=<?php  $id = $_GET["id"]; echo "$id"; ?>">
	<button id="registerButton" name="submit" type="submit">OUI</button>
	<div class="spacer"></div>
	</form>
<?php
    ?>
    <img src="src/img/téléchargement.jpg" alt="image event" class="imgevent">
    <h2 class="titre-h2">Bassleader reactivated world <div class="category">concert</div></h2>
    <h5 class="date"><?php echo date('H:i, D d/m/Y')?></h5>
    <p class="description"><strong>description:</strong>
        Le Lorem Ipsum est simplement du faux texte employé dans la composition et la mise en page avant impression. Le Lorem Ipsum est le faux texte standard de l'imprimerie depuis les années 1500, quand un imprimeur anonyme assembla ensemble des morceaux de texte pour réaliser un livre spécimen de polices de texte. Il n'a pas fait que survivre cinq siècles, mais s'est aussi adapté à la bureautique informatique, sans que son contenu n'en soit modifié. Il a été popularisé dans les années 1960 grâce à la vente de feuilles Letraset contenant des passages du Lorem Ipsum, et, plus récemment, par son inclusion dans des applications de mise en page de texte, comme Aldus PageMaker.</p>
    <p class="author">auteur</p>

</section >
<script src="https://kit.fontawesome.com/1815b8a69b.js" crossorigin="anonymous"></script>
</body>
</html>