<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <!--Cari data siswa-->
    <form action="" method="post">
        <input type="text" name="unik_id" id="unik_id" placeholder="Masukkan Unik ID">
        <button type="submit">Cari</button>
    </form>

    <!--Tampil data siswa-->
    <?php
    include_once "class/Siswa.php";
    include_once "class/Absen.php";

    if(isset($_POST['unik_id']))
    {
        $Siswa=new Siswa();

        if($data=$Siswa->cari_siswa_by_unik_id($_POST['unik_id']))//ubah menjadi unik id
        {
            echo "Nama:{$data['nama']}<br>";
            echo "NISN:{$data['nisn']}<br>";
            echo "Kelas:{$data['kelas']}<br>";
            $Absen= new Absen();
            $Absen->simpan_absen($data['id']);
            //Lakukan Absen
        }
        else{
            echo "<h1>Data Tidak di Temukan</h1>";
        }
    }
    ?>
</body>
</html>