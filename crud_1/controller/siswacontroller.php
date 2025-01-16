<?php

$aksi=$_GET['aksi'];

include "../class/Siswa.php";
$Siswa=new Siswa();

if($aksi=='insert'){
    $Siswa->tambah_data_siswa($_POST['nama'],$_POST['nisn'],$_POST['kelas']);
}

elseif($aksi=='delete'){
    $Siswa->hapus_data_siswa($_GET['id']);
}

elseif($aksi=='update'){
    $Siswa->update_data_siswa($_POST['nama'],$_POST['nisn'],$_POST['kelas'],$_POST['id']);
}
header("location:../index.php");