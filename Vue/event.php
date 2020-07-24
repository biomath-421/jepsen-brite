<html>
<head>
<title>past events</title>
<link rel="stylesheet" href="style.css">
</head>
<body>
<?php include("header.inc.php");?>
<main class="grid">
<table  class="categoryzone">
    <tr><th>Catégories</th></tr>
    <tr>
        <td class="inputcheck">
            <div>
                <input type="checkbox" id="all" name="all">
                <label for="concert">
                    All
                </label>
            </div>
        </td>
    </tr>
    <tr>
        <td class="inputcheck">
            <div>
                <input type="checkbox" id="concert" name="concert">
                <label for="concert">
                    concert
                </label>
            </div>
        </td>
    </tr>
    <tr>
        <td class="inputcheck">
            <div>
                <input type="checkbox" id="culture" name="culture">
                <label for="culture">
                    culture
                </label>
            </div>
        </td>
    </tr>
    <tr>    <td class="inputcheck"><div><input type="checkbox" id="manifestation" name="manifestation"><label for="manifestation">manifestation</label></div></td>
    </tr>
    <tr><td class="inputcheck"><div><input type="checkbox" id="musee" name="musee"><label for="musee">musée</label></div></td></tr>
    </table>
    <div class="feedback">
<?php date_default_timezone_set('Europe/Paris')?>
    <div class="range">
    <button class="buttonadd" onclick=window.location.href='http://localhost/jepsen_brite/jepsen-brite/vue/event.php?'>events</button>
<button class="buttonadd" onclick=window.location.href='http://localhost/jepsen_brite/jepsen-brite/vue/past_event.php?'> past events</button>
<button class="buttonadd" onclick=window.location.href='http://localhost/jepsen_brite/jepsen-brite/vue/create_event.php?'> + add event</button>
</div>
<section class="article">
    
    <i class="fab fa-readme"></i>
    <i class="fas fa-pen"></i>
    <i class="fas fa-trash"></i>
    
    <img src="téléchargement.jpg" alt="image event" class="imgevent">
    <h2 class="Titre-h2">Bassleader reactivated world <div class="category">concert</div></h2>
    <h5 class="date"><?php echo date('H:i, D d/m/Y')?></h5>
    <p class="description"><strong>description:</strong> Le Lorem Ipsum est simplement du faux texte employé dans la composition et la mise en page avant impression. Le Lorem Ipsum est le faux texte standard de l'imprimerie depuis les années 1500, quand un imprimeur anonyme assembla ensemble des morceaux de texte pour réaliser un livre spécimen de polices de texte. Il n'a pas fait que survivre cinq siècles, mais s'est aussi adapté à la bureautique informatique, sans que son contenu n'en soit modifié. Il a été popularisé dans les années 1960 grâce à la vente de feuilles Letraset contenant des passages du Lorem Ipsum, et, plus récemment, par son inclusion dans des applications de mise en page de texte, comme Aldus PageMaker.</p>
    <p class="author">auteur</p>
</section >
<section class="article">
    
    <i class="fab fa-readme"></i>
    <i class="fas fa-pen"></i>
    <i class="fas fa-trash"></i>
    
    <img src="2016-Daydream-Festival.jpg" alt="image event" class="imgevent">
    <h2 class="Titre-h2">Daydream festival<div class="category">concert</div></h2>
    <h5 class="date"><?php echo date('H:i, D d/m/Y')?></h5>
    <p class="description"><strong>description:</strong> Le Lorem Ipsum est simplement du faux texte employé dans la composition et la mise en page avant impression. Le Lorem Ipsum est le faux texte standard de l'imprimerie depuis les années 1500, quand un imprimeur anonyme assembla ensemble des morceaux de texte pour réaliser un livre spécimen de polices de texte. Il n'a pas fait que survivre cinq siècles, mais s'est aussi adapté à la bureautique informatique, sans que son contenu n'en soit modifié. Il a été popularisé dans les années 1960 grâce à la vente de feuilles Letraset contenant des passages du Lorem Ipsum, et, plus récemment, par son inclusion dans des applications de mise en page de texte, comme Aldus PageMaker.</p>
    <p class="author">auteur</p>
</section >
<section class="article">
    
    <i class="fab fa-readme"></i>
    <i class="fas fa-pen"></i>
    <i class="fas fa-trash"></i>
    
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
</body>
</html>