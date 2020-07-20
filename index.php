<html>
<head>
<title>accueil</title>
<link rel="stylesheet" href="style.css">
</head>
<body>
<header>
<img src="" alt="logo jepsen-brite" class="logoimg" onclick=window.location.href='http://localhost/jepsen_brite/jepsen-brite/index.php?'>

<button class="buttonsearch">search event</button>
<button class="buttonsignin">sign in</button>
<button class="buttonsignup">sign up</button>
</header>
<main>
<?php date_default_timezone_set('Europe/Paris')?>
<button class="buttonadd" onclick=window.location.href='http://localhost/jepsen_brite/jepsen-brite/create_event.php?'> <strong class="add">+</strong> add event</button>
<section class="article">
<img src="téléchargement.jpg" alt="image event" class="imgevent">
<h2 class="Titre-h2">Bassleader reactivated world <div class="category">concert</div></h2>
<h5 class="date"><?php echo date('H:i, D d/m/Y')?></h5>
<p class="description"><strong>description:</strong> Le Lorem Ipsum est simplement du faux texte employé dans la composition et la mise en page avant impression. Le Lorem Ipsum est le faux texte standard de l'imprimerie depuis les années 1500, quand un imprimeur anonyme assembla ensemble des morceaux de texte pour réaliser un livre spécimen de polices de texte. Il n'a pas fait que survivre cinq siècles, mais s'est aussi adapté à la bureautique informatique, sans que son contenu n'en soit modifié. Il a été popularisé dans les années 1960 grâce à la vente de feuilles Letraset contenant des passages du Lorem Ipsum, et, plus récemment, par son inclusion dans des applications de mise en page de texte, comme Aldus PageMaker.</p>
<p class="author">auteur</p>
</section >
<section class="article">
<img src="2016-Daydream-Festival.jpg" alt="image event" class="imgevent">
<h2 class="Titre-h2">Daydream festival<div class="category">concert</div></h2>
<h5 class="date"><?php echo date('H:i, D d/m/Y')?></h5>
<p class="description"><strong>description:</strong> Le Lorem Ipsum est simplement du faux texte employé dans la composition et la mise en page avant impression. Le Lorem Ipsum est le faux texte standard de l'imprimerie depuis les années 1500, quand un imprimeur anonyme assembla ensemble des morceaux de texte pour réaliser un livre spécimen de polices de texte. Il n'a pas fait que survivre cinq siècles, mais s'est aussi adapté à la bureautique informatique, sans que son contenu n'en soit modifié. Il a été popularisé dans les années 1960 grâce à la vente de feuilles Letraset contenant des passages du Lorem Ipsum, et, plus récemment, par son inclusion dans des applications de mise en page de texte, comme Aldus PageMaker.</p>
<p class="author">auteur</p>
</section >
</main>
<?php
?>
<script src="https://kit.fontawesome.com/1815b8a69b.js" crossorigin="anonymous"></script>
</body>
</html>