<?php

include "MPV.php";

//objek
$BMW=new Car();
$BMW->set_nama('BMW');
$BMW->set_warna('Hitam');
$BMW->get_status();
echo "<br>";
$Toyota=new MPV();
$Toyota->set_nama('Toyota');
$Toyota->set_warna('Putih');
$Toyota->get_status();