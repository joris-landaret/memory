<?php

$dos = '<form action="" method="$_POST"><input type="image" name="flip" alt="ok" class="img" src="img/back1.jpg"></form>';
$ange = '<div class="img"><img src="img/ange1.jpg"></img></div>';
$demon = '<div class="img"><img src="img/demon.jpg"></img></div>';
$dragon = '<div class="img"><img src="img/dragon.jpg"></img></div>';
$loup_garou = '<div class="img"><img src="img/loup_garou.jpg"></img></div>';
$vampire = '<div class="img"><img src="img/vampire1.jpg"></img></div>';
$ent = '<div class="img"><img src="img/ent.jpg"></img></div>';
$fee = '<div class="img"><img src="img/fée.jpg"></img></div>';
$fenrir = '<div class="img"><img src="img/fenrir.jpg"></img></div>';
$pegase = '<div class="img"><img src="img/pegase.jpg"></img></div>';
$valkyrie = '<div class="img"><img src="img/valkyrie.jpg"></img></div>';
$zombi = '<div class="img"><img src="img/zombie1.jpg"></img></div>';
$alien = '<div class="img"><img src="img/alien.jpg"></img></div>';

class Card
{
    // ATTRIBUT
    public $back;
    public $face;


    // CONSTRUCTION
    public function __construct($back, $face)
    {
        $this->back = $back;
        $this->face = $face;
    }

    // METHODE \\
    // dos de la carte
    public function back()
    {
        return $this->back;
    }
    // face de la carte
    public function face()
    {
        return $this->face;
    }

    public function allinfo()
    {
        return $this->back . $this->face;
    }
    // retourné la carte la carte
    public function flip()
    {
        if (isset($_POST)) {
            return $this->face;
        } else {
        }
    }
}
