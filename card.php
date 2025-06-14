<?php

class Card
{
    // ATTRIBUT
    public $back;
    private $face;
    private $cards = [
        'ange' => '<div class="img"><img src="img/ange1.jpg" alt="ange"></div>',
        'demon' => '<div class="img"><img src="img/demon.jpg" alt="ange"></div>',
        'dragon' => '<div class="img"><img src="img/dragon.jpg" alt="ange"></div>',
        'loup_garou' => '<div class="img"><img src="img/loup_garou.jpg" alt="ange"></img></div>',
        'vampire' => '<div class="img"><img src="img/vampire1.jpg" alt="ange"></div>',
        'ent' => '<div class="img"><img src="img/ent.jpg" alt="ange"></div>',
        'fee' => '<div class="img"><img src="img/fée.jpg" alt="ange"></div>',
        'fenrir' => '<div class="img"><img src="img/fenrir.jpg" alt="ange"></div>',
        'pegase' => '<div class="img"><img src="img/pegase.jpg" alt="ange"></div>',
        'valkyrie' => '<div class="img"><img src="img/valkyrie.jpg" alt="ange"></div>',
        'zombi' => '<div class="img"><img src="img/zombie1.jpg" alt="ange"></div>',
        'alien' => '<div class="img"><img src="img/alien.jpg" alt="ange"></div>'
    ];
    public $stats;


    // CONSTRUCTION
    public function __construct($face_key)
    {
        $this->back = '<form action="" method="post"><input type="image" name="flip" alt="ok" class="img" src="img/back1.jpg"></form>';
        $this->face = $this->cards[$face_key];
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
