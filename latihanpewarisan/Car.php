<?php
class Car

{
    //property
    protected $p_nama;
    protected $p_warna;

    //method
    public function set_nama($a_nama)
    {
        $this->p_nama=$a_nama;
    }
    public function set_warna($a_warna)
    {
        $this->p_warna=$a_warna;
    }
    function get_status()
    {
        echo "Nama Mobil : {$this->p_nama}<br>";
        echo "Warna Mobil : {$this->p_warna}<br>";
    }
}