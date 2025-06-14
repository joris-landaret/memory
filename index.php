<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Memory</title>
    <link rel="stylesheet" href="css/header.css">
    <link rel="stylesheet" href="css/footer.css">
</head>

<body>
    <?php session_start();
    include('header.php') ?>
    <main>
        <p>Bienvenu sur ce site web, ici vous aurez l'opportunité de jouer au célèbre jeu memory.</p>
        <p>Pour pouvoir jouer à MEMORY vous devrez vous inscrire et/ou vous connecter.</p>
        <h2>Descriptif du jeu :</h2>
        <p>Vous trouverez un certain nombre de paires de cartes faces cachées et le but est de toutes les trouver.</p>
        <p>Pour ce faire vous devez choisir deux cartes à révéler, et si les cartes ne correspondent pas elles se retourneront faces cachées, mais si elles correspondent alors elles resteront faces visibles.</p>
        <p>La partie se finit jusqu'à ce que toutes les cartes soient révélées.</p>
    </main>
    <?php include('footer.php') ?>
</body>

</html>