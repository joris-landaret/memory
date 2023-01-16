<?php

class Card
{
    // ATTRIBUT
    public $back;
    private $cards = [
        'ange' => '<div class="img"><img src="img/ange1.jpg" /></div>',
        'demon' => '<div class="img"><img src="img/demon.jpg" /></div>',
        'dragon' => '<div class="img"><img src="img/dragon.jpg /></div>',
        'loup_garou' => '<div class="img"><img src="img/loup_garou.jpg"></img></div>',
        'vampire' => '<div class="img"><img src="img/vampire1.jpg" /></div>',
        'ent' => '<div class="img"><img src="img/ent.jpg" /></div>',
        'fee' => '<div class="img"><img src="img/fée.jpg /></div>',
        'fenrir' => '<div class="img"><img src="img/fenrir.jpg /></div>',
        'pegase' => '<div class="img"><img src="img/pegase.jpg /></div>',
        'valkyrie' => '<div class="img"><img src="img/valkyrie /></div>',
        'zombi' => '<div class="img"><img src="img/zombie1 /></div>',
        'alien' => '<div class="img"><img src="img/alien.jpg /></div>'
    ];
    public $stats;


    // CONSTRUCTION
    public function __construct($face)
    {
        $this->back = '<form action="" method="post"><input type="image" name="flip" alt="ok" class="img" src="img/back1.jpg"></form>';
        $this->face = $this->cards[$face];
        $this->turn_back();
    }

    // METHODE \\
    // dos de la carte
    public function turn_back()
    {
        $this->stats = $this->back;
    }
    // face de la carte
    public function turn_face()
    {
        $this->stats = $this->face;
    }

    public function allinfo()
    {
        return $this->back . $this->face;
    }
    // retourné la carte la carte
    // public function flip()
    // {
    // }
}
