<?php
if(!isset($_SESSION)){
    session_start();
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
    <form style="margin-top:0;">
<h2 class="Titre-h2 h2center">Nouvel événement</h2>
<input type="text" id='auteur' class="title_input"placeholder="auteur"></input>
<input type="text" id="titre"class="title_input"placeholder="Titre"></input>
<input type="date" id='date' class="title_input"></input>
<input type="time" id='time' class="title_input"></input>
<input type="text" id="description" class="descr_input"placeholder="insérez votre description ici"></input>
<input type="file" id="image"class="title_input"></input>
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
<input type=submit class="title_input"method="post" action="event.php"></input>
</form>
</main>
<?php include("layout/footer.inc.php");?>

<script src="https://kit.fontawesome.com/1815b8a69b.js" crossorigin="anonymous"></script>
</body>
</html>