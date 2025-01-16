<?php

class Hero1

{
    //property
    private $p_nama;
    private $p_health;
    private $p_attack;

    //method
    public function set_nama($a_nama)
    {
        $this->p_nama=$a_nama;
    }
    public function set_health($a_health=0)
    {
        $this->p_health=$a_health;
    }
    public function set_attack($a_attack)
    {
        $this->p_attack=$a_attack;
    }

    public function get_status()
    {
        echo "Nama: {$this->p_nama}<br>";
        echo "Health: {$this->p_health}<br>";
        echo "Attack: {$this->p_attack}<br>";
    }
}

//objek
$Zilong=new Hero1();
$Zilong->set_nama('Zilong');
$Zilong->set_health('80');
$Zilong->set_attack('6');
$Zilong->get_status();

echo "<br>";

//objek
$Layla=new Hero1();
$Layla->set_nama('Layla');
$Layla->set_health('90');
$Layla->set_attack('7');
$Layla->get_status();