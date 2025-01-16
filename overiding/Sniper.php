<?php

include_once "Hero.php";

class Sniper extends Hero
{
    protected $p_nama;
    protected $p_health;
    protected $p_attack;

    public function get_health()
    {
        echo "Health dari {$this->p_nama} adalah {$this->p_health} <br>";
        echo "{$this->p_nama} Hati-hati terhadap serangan";
    }
}