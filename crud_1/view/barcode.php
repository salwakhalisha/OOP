<?php

include_once "../class/Siswa.php";
require '../vendor/autoload.php';
$Siswa= new Siswa();
if($data=$Siswa->cari_siswa_by_id($GET_['id']))
{
    echo "{$data['nama']}<br>";
    $generator = new Picqer\Barcode\BarcodeGeneratorHTML();
    echo $generator->getBarcode($data['unik_id'], $generator::TYPE_CODE_128,1,25);
}