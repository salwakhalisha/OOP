<?php
class Musik
{
    //property
    private $p_judul;
    private $p_penyanyi;
    private $p_penulis;

    //method 
    function getJudul()
    {
        echo " Lagu berjudul {$this->p_judul} dinyanyikan oleh {$this->p_penyanyi} yang 
        ditulis oleh {$this->p_penulis} <br>";
    }

    function setJudul($a_judul,$a_penyanyi,$a_penulis)
    {
        $this->p_judul=$a_judul;
        $this->p_penyanyi=$a_penyanyi;
        $this->p_penulis=$a_penulis;
    }

}

//objek
$Water=new Musik();
$Water->setJudul('Water','Tyla','Tyla dan Ariowa');
$Water->getJudul();


