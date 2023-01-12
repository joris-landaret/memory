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
    <link rel="stylesheet" href="board.css">
</head>

<body>
    <header>

    </header>

    <main>
        <h1>MEMORY</h1>

        <div class="container">
            <?php

            // $back_card = new Card('Back', $back);
            // echo $back_card->image();

            $ange_card = new Card($dos, $ange);

            $demon_card = new Card($dos, $demon);

            $dragon_card = new Card($dos, $dragon);

            $loup_garou_card = new Card($dos, $loup_garou);

            $vampire_card = new Card($dos, $vampire);

            $ent_card = new Card($dos, $ent);

            $fee_card = new Card($dos, $fee);

            $fenrir_card = new Card($dos, $fenrir);

            $pegase_card = new Card($dos, $pegase);

            $valkyrie_card = new Card($dos, $valkyrie);

            $zombi_card = new Card($dos, $zombi);

            $alien_card = new Card($dos, $alien);

            $tabl = array(
                $alien, $alien, $valkyrie_card->back(),
                $valkyrie_card->back(), $pegase_card->back(),
                $pegase_card->back(), $fenrir_card->back(), $fenrir_card->back(),
                $fee_card->back(), $fee_card->back(), $ent_card->back(),
                $ent_card->back(), $vampire_card->back(), $vampire_card->back(),
                $loup_garou_card->back(), $loup_garou_card->back(),
                $dragon_card->back(), $dragon_card->back(), $ange_card->back(),
                $ange_card->back(), $demon_card->back(), $demon_card->back(),
                $zombi_card->back(), $zombi_card->back()
            );

            ?>

        </div>
    </main>

    <footer>


    </footer>

</body>

</html>