<?php

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
    public function back()
    {
        return $this->back;
    }

    public function face()
    {
        return $this->face;
    }

    public function allinfo()
    {
        return $this->back . $this->face;
    }

    public function flip()
    {
        if (isset($_POST)) {
            return $this->face;
        } else {
        }
    }
}
