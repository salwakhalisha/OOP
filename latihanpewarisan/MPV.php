<?php

include "Car.php";

class MPV extends Car
{

    public function get_nama()
    {
        echo $this->p_nama;

    }
    public function get_warna()
    {
        echo $this->p_warna;

    }

}