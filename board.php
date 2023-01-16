<?php

include "Card.php";

?>

<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Board</title>
    <link rel="stylesheet" href="css/header.css">
    <link rel="stylesheet" href="css/footer.css">
    <link rel="stylesheet" href="css/board.css">
</head>

<body>

    <?php include('header.php') ?>

    <main>
        <h1>MEMORY</h1>

        <div class="container">
            <?php

            $tabl = array(
                new Card('ange'),
                new Card('demon'),
                new Card('dragon'),
                new Card('loup_garou'),
                new Card('vampire'),
                new Card('ent'),
                new Card('fee'),
                new Card('fenrir'),
                new Card('pegase'),
                new Card('valkyrie'),
                new Card('zombi'),
                new Card('alien')
            );

            shuffle($tabl);

            foreach ($tabl as $card) {
                echo $card->stats;
            }

            // for ($i = 0; $i < 12; $i++) {
            // }

            // $_SESSION['board'];

            // if (isset($_POST['flip'])) {

            //     echo $alien_card->face;
            // }

            ?>

        </div>
    </main>

    <?php include('footer.php') ?>

</body>

</html>