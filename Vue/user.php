<html>
    <head>
        <title>username</title>
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
<section class="article">
<div class="range1">
<i class="fas fa-pen buttonsection"></i>
<i class="fas fa-trash buttonsection"></i>
</div>
<img src="avatar.jpg" alt="image user" class="imguser">
<h2 class="Titre-h2">Username</h2>
<h5 class="email">Email address:</h5>
</section >
</main>
<script src="https://kit.fontawesome.com/1815b8a69b.js" crossorigin="anonymous"></script>
</body>
</html>