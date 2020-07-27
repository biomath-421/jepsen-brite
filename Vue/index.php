<html>
    <head>
        <title>homepage</title>
        <link rel="stylesheet" href="style.css">
    </head>
    <body>
        <?php include("header.inc.php");?>
        <main>
            <div class="feedback">
                <?php date_default_timezone_set('Europe/Paris')?>
                <div class="range">
                    <button class="buttonadd" onclick=window.location.href='http://localhost/jepsen_brite/jepsen-brite/vue/event.php?'>events</button>
                    <button class="buttonadd" onclick=window.location.href='http://localhost/jepsen_brite/jepsen-brite/vue/past_event.php?'>past events</button>
                    <button class="buttonadd" onclick=window.location.href='http://localhost/jepsen_brite/jepsen-brite/vue/create_event.php?'>+ add event</button>
                </div>
<div id="slider"></div>
<section class="article">
<div class="range1">
<i class="fab fa-readme buttonsection"></i>
<i class="fas fa-pen buttonsection"></i>
<i class="fas fa-trash buttonsection"></i>
</div>
<img src="téléchargement.jpg" alt="image event" class="imgevent">
<h2 class="Titre-h2">Bassleader reactivated world <div class="category">concert</div></h2>
<h5 class="date"><?php echo date('H:i, D d/m/Y')?></h5>
<p class="description"><strong>description:</strong>
 Le Lorem Ipsum est simplement du faux texte employé dans la composition et la mise en page avant impression. Le Lorem Ipsum est le faux texte standard de l'imprimerie depuis les années 1500, quand un imprimeur anonyme assembla ensemble des morceaux de texte pour réaliser un livre spécimen de polices de texte. Il n'a pas fait que survivre cinq siècles, mais s'est aussi adapté à la bureautique informatique, sans que son contenu n'en soit modifié. Il a été popularisé dans les années 1960 grâce à la vente de feuilles Letraset contenant des passages du Lorem Ipsum, et, plus récemment, par son inclusion dans des applications de mise en page de texte, comme Aldus PageMaker.</p>
<p class="author">auteur</p>
</section >
<section class="article">
<div class="range1">
<i class="fab fa-readme buttonsection"></i>
<i class="fas fa-pen buttonsection"></i>
<i class="fas fa-trash buttonsection"></i>
</div>
<img src="2016-Daydream-Festival.jpg" alt="image event" class="imgevent">
<h2 class="Titre-h2">Daydream festival<div class="category">concert</div></h2>
<h5 class="date"><?php echo date('H:i, D d/m/Y')?></h5>
<p class="description"><strong>description:</strong> Le Lorem Ipsum est simplement du faux texte employé dans la composition et la mise en page avant impression. Le Lorem Ipsum est le faux texte standard de l'imprimerie depuis les années 1500, quand un imprimeur anonyme assembla ensemble des morceaux de texte pour réaliser un livre spécimen de polices de texte. Il n'a pas fait que survivre cinq siècles, mais s'est aussi adapté à la bureautique informatique, sans que son contenu n'en soit modifié. Il a été popularisé dans les années 1960 grâce à la vente de feuilles Letraset contenant des passages du Lorem Ipsum, et, plus récemment, par son inclusion dans des applications de mise en page de texte, comme Aldus PageMaker.</p>
<p class="author">auteur</p>
</section >
<section class="article">
<div class="range1">
<i class="fab fa-readme buttonsection"></i>
<i class="fas fa-pen buttonsection"></i>
<i class="fas fa-trash buttonsection"></i>
</div>
<img src="dominator.jpg" alt="image event" class="imgevent">
<h2 class="Titre-h2">Dominator 2020<div class="category">concert</div></h2>
<h5 class="date"><?php echo date('H:i, D d/m/Y')?></h5>
<p class="description"><strong>description:</strong> Le Lorem Ipsum est simplement du faux texte employé dans la composition et la mise en page avant impression. Le Lorem Ipsum est le faux texte standard de l'imprimerie depuis les années 1500, quand un imprimeur anonyme assembla ensemble des morceaux de texte pour réaliser un livre spécimen de polices de texte. Il n'a pas fait que survivre cinq siècles, mais s'est aussi adapté à la bureautique informatique, sans que son contenu n'en soit modifié. Il a été popularisé dans les années 1960 grâce à la vente de feuilles Letraset contenant des passages du Lorem Ipsum, et, plus récemment, par son inclusion dans des applications de mise en page de texte, comme Aldus PageMaker.</p>
<p class="author">auteur</p>
</section >
</div>
</main>
<?php include("footer.inc.php");?>
<script src="https://kit.fontawesome.com/1815b8a69b.js" crossorigin="anonymous"></script>
=======
<?php
    session_start();
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Home</title>

    <link rel="stylesheet" href="src/css/style.css">
</head>
<body>
<body>
    <?php 
        if(isset($_GET['id']) AND $_GET['id'] == $_SESSION['id']){
            include("header.php");
        }else{
            include("header.inc.php");
        }
    ?>
    <div id="slider"></div>
    <main>
        <div class="feedback">
        <?php date_default_timezone_set('Europe/Paris')?>
        <div class="range">
        
        <?php 
            if(isset($_GET['id']) AND $_GET['id'] == $_SESSION['id']){
        ?>
                <a href="event.php?id=<?php echo $_SESSION['id']; ?>" class="buttonadd">events</a>
                <a href="past_event.php?id=<?php echo $_SESSION['id']; ?>" class="buttonadd">past events</a>
                <a href="create_event.php?id=<?php echo $_SESSION['id']; ?>" class="buttonadd">+ add even</a>
        <?php
            }else{
        ?>
                <a href="event.php" class="buttonadd">events</a>
                <a href="past_event.php" class="buttonadd">past events</a>
        <?php
            }
        ?>
        </div>
        <section class="article">

        <i class="fab fa-readme buttonsection"></i>
        <i class="fas fa-pen buttonsection"></i>
        <i class="fas fa-trash buttonsection"></i>

        <img src="téléchargement.jpg" alt="image event" class="imgevent">
        <h2 class="Titre-h2">Bassleader reactivated world <div class="category">concert</div></h2>
        <h5 class="date"><?php echo date('H:i, D d/m/Y')?></h5>
        <p class="description"><strong>description:</strong>
         Le Lorem Ipsum est simplement du faux texte employé dans la composition et la mise en page avant impression. Le Lorem Ipsum est le faux texte standard de l'imprimerie depuis les années 1500, quand un imprimeur anonyme assembla ensemble des morceaux de texte pour réaliser un livre spécimen de polices de texte. Il n'a pas fait que survivre cinq siècles, mais s'est aussi adapté à la bureautique informatique, sans que son contenu n'en soit modifié. Il a été popularisé dans les années 1960 grâce à la vente de feuilles Letraset contenant des passages du Lorem Ipsum, et, plus récemment, par son inclusion dans des applications de mise en page de texte, comme Aldus PageMaker.</p>
        <p class="author">auteur</p>
        </section >
        <section class="article">

        <i class="fab fa-readme buttonsection"></i>
        <i class="fas fa-pen buttonsection"></i>
        <i class="fas fa-trash buttonsection"></i>

        <img src="2016-Daydream-Festival.jpg" alt="image event" class="imgevent">
        <h2 class="Titre-h2">Daydream festival<div class="category">concert</div></h2>
        <h5 class="date"><?php echo date('H:i, D d/m/Y')?></h5>
        <p class="description"><strong>description:</strong> Le Lorem Ipsum est simplement du faux texte employé dans la composition et la mise en page avant impression. Le Lorem Ipsum est le faux texte standard de l'imprimerie depuis les années 1500, quand un imprimeur anonyme assembla ensemble des morceaux de texte pour réaliser un livre spécimen de polices de texte. Il n'a pas fait que survivre cinq siècles, mais s'est aussi adapté à la bureautique informatique, sans que son contenu n'en soit modifié. Il a été popularisé dans les années 1960 grâce à la vente de feuilles Letraset contenant des passages du Lorem Ipsum, et, plus récemment, par son inclusion dans des applications de mise en page de texte, comme Aldus PageMaker.</p>
        <p class="author">auteur</p>
        </section >
        <section class="article">

        <i class="fab fa-readme buttonsection"></i>
        <i class="fas fa-pen buttonsection"></i>
        <i class="fas fa-trash buttonsection"></i>

        <img src="dominator.jpg" alt="image event" class="imgevent">
        <h2 class="Titre-h2">Dominator 2020<div class="category">concert</div></h2>
        <h5 class="date"><?php echo date('H:i, D d/m/Y')?></h5>
        <p class="description"><strong>description:</strong> Le Lorem Ipsum est simplement du faux texte employé dans la composition et la mise en page avant impression. Le Lorem Ipsum est le faux texte standard de l'imprimerie depuis les années 1500, quand un imprimeur anonyme assembla ensemble des morceaux de texte pour réaliser un livre spécimen de polices de texte. Il n'a pas fait que survivre cinq siècles, mais s'est aussi adapté à la bureautique informatique, sans que son contenu n'en soit modifié. Il a été popularisé dans les années 1960 grâce à la vente de feuilles Letraset contenant des passages du Lorem Ipsum, et, plus récemment, par son inclusion dans des applications de mise en page de texte, comme Aldus PageMaker.</p>
        <p class="author">auteur</p>
        </section >
        </div>
    </main>
    <?php include("footer.inc.php");?>
    <script src="https://kit.fontawesome.com/1815b8a69b.js" crossorigin="anonymous"></script>
>>>>>>> refs/remotes/origin/bryan
</body>
</html>
