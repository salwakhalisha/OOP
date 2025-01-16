<?php
class Hero
{
    //property
    private $p_nama;
    private $p_health;
    private $p_attack;

    //method
     
    // constructor
    function __construct($a_nama,$a_health,$a_attack)
    {
        $this->p_nama=$a_nama;
        $this->p_health=$a_health;
        $this->p_attack=$a_attack; 
    }

   function serang_musuh(Hero $a_obj)
   {
    echo "{$this->p_nama} menyerang {$a_obj->p_nama} <br>"; 

    $a_obj->p_health=$a_obj->p_health-$this->p_attack; 
   }
    
   function get_health()
   {
    echo " Health {$this->p_nama}:{$this->p_health} <br>"; 
   }
}

//objek
$Layla=new Hero('Layla',60,6);

//objek 
$Zilong=new Hero('Zilong',60,7);

$Zilong->get_health();
$Layla->serang_musuh($Zilong);   
$Zilong->get_health();

$Layla->get_health();
$Zilong->serang_musuh($Layla);
$Layla->get_health();