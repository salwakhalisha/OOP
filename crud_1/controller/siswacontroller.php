<?php

$aksi=$_GET['aksi'];

include_once "../class/Siswa.php";
include_once "../dist/lib/phpqrcode/qrlib.php";
$Siswa=new Siswa();

if($aksi=='insert'){
    //mengakses class siswa untuk menambah data
    $unik_id=uniqid();
    $Siswa->tambah_data_siswa($_POST['nama'],$_POST['nisn'],$_POST['kelas'],$unik_id);
    $file="../img/".$unik_id.".png";
    QRcode::png($unik_id,$file);
}

elseif($aksi=='delete'){
    $Siswa->hapus_data_siswa($_GET['id']);
}

elseif($aksi=='update'){
    $Siswa->update_data_siswa($_POST['nama'],$_POST['nisn'],$_POST['kelas'],$_POST['id']);
}
header("location:../index.php");