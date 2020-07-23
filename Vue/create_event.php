<html>
<head>
<title>create event</title>
<link rel="stylesheet" href="style.css">
</head>
<body>
<header>
<img src="" alt="logo jepsen-brite" class="logoimg" onclick=window.location.href='http://localhost/jepsen_brite/jepsen-brite/vue/index.php?'>

<button class="buttonsearch"><i class="fas fa-search"></i></button>
<button class="buttonsignin"  onclick=window.location.href='http://localhost/jepsen_brite/jepsen-brite/vue/signin_page.php?'>sign in</button>
<button class="buttonsignup" onclick=window.location.href='http://localhost/jepsen_brite/jepsen-brite/vue/signin_page.php?'>sign up</button>
</header>
<main>
<h2 class="Titre-h2 h2center">Nouvel événement</h2>
<input type="text" class="title_input"placeholder="Titre"></input>
<input type="text" class="descr_input"placeholder="insérez votre description ici"></input>
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
</main>
<script src="https://kit.fontawesome.com/1815b8a69b.js" crossorigin="anonymous"></script>
</body>
</html>