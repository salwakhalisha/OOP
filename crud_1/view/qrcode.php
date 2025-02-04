<?php

include_once "../class/Siswa.php";

$Siswa= new Siswa();
if($data=$Siswa->cari_siswa_by_id ($_GET['id']))
{
    echo "{$data['nama']}<br>";
    echo '<img src="../img/'.$data['unik_id'].'.png">';
}