<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8" />
    <title>Mon forum</title>
    <link href="style.css" rel="stylesheet" />
    <?php
    include 'Parts/stylesheets.html';
    ?>
</head>

<body>
<h1>Modifier mon super forum !</h1>
<p>Ici j'affiche le formulaire de modification d'un article</p>

<form action="/project/forumMvc/index.php?controller=article&action=updateArticle" method="post">
    <input name="titre" type="text" placeholder="Nouveau nom de mon article">
    <input name="contenu" type="text" placeholder="Nouveau contenu de mon article">
    <input type="submit" value="Valider !">
</form>
</body>
</html>