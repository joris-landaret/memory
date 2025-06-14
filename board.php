<?php

session_start();
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
                $card1 = new Card('ange'),
                $card2 = new Card('demon'),
                $card3 = new Card('dragon'),
                $card4 = new Card('loup_garou'),
                $card5 = new Card('vampire'),
                $card6 = new Card('ent'),
                $card7 = new Card('fee'),
                $card8 = new Card('fenrir'),
                $card9 = new Card('pegase'),
                $card10 = new Card('valkyrie'),
                $card11 = new Card('zombi'),
                $card12 = new Card('alien'),
                $card13 = new Card('ange'),
                $card14 = new Card('demon'),
                $card15 = new Card('dragon'),
                $card16 = new Card('loup_garou'),
                $card17 = new Card('vampire'),
                $card18 = new Card('ent'),
                $card19 = new Card('fee'),
                $card20 = new Card('fenrir'),
                $card21 = new Card('pegase'),
                $card22 = new Card('valkyrie'),
                $card23 = new Card('zombi'),
                $card24 = new Card('alien')
            );

            shuffle($tabl);

            foreach ($tabl as $card) {
                //$card->turn_face();
                echo $card->stats;
            }

            // for ($i = 0; $i < 24; $i++) {
            // }

            // $_SESSION['board'];

            // if (isset($_POST['flip'])) {
            //     $tab1[1]->turn_face;
            //     echo $tab1[1]->state;
            // }

            ?>

        </div>
    </main>

    <?php include('footer.php') ?>

</body>

</html>