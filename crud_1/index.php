<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Belajar OOP CRUD</title>
    <link rel="stylesheet"href="dist/css/bootstrap.min.css">
</head>
<body>
<div class="container mt-5">
    <div class="row">
        <div class="col-12">
            <div class="row">
                <div class="col-lg-12">
                    <a href="view/siswa/tambah.php"class="btn btn-lg btn-success">Tambah Data</a>
                </div>
            </div>
            <div class="row mt-5">
                <div class="col-12">
                    <h1>Data Siswa</h1>
                    <table class=" table table-striped">
                        <thead>
                            <tr>
                                <th>No</th>
                                <th>Nama</th>
                                <th>NISN</th>
                                <th>Kelas</th>
                                <th>Aksi</th>
                            </tr>
                        </thead>
                        <tbody>
                        <?php
include_once "class/Siswa.php";
$Siswa= new Siswa();
$data_all=$Siswa->tampil_data_siswa_all();
//foreach($data_all as $da)
//{
//    echo "<li>{$da['nama']}-{$da['nisn']}-{$da['kelas']}</li>";
//}
$no=1;
foreach($data_all as $dt){
    echo '<tr>
    <td>'.$no.'</td>
    <td>'.$dt["nama"].'</td>
    <td>'.$dt["nisn"].'</td>
    <td>'.$dt["kelas"].'</td>
    <td>
    <a href="Controller/siswacontroller.php?aksi=delete&id='.$dt["id"].'" class="btn btn-sm btn-danger">Hapus</a>

    <a href="view/siswa/edit.php?id='.$dt["id"].'" class="btn btn-sm btn-warning">Edit</a>

    <a href="view/barcode.php?id='.$dt["id"].'" class="btn btn-sm btn-primary">Barcode</a>

    <a href="view/qrcode.php?id='.$dt["id"].'" class="btn btn-sm btn-info">QRcode</a>

    </td>
    </tr>';
    $no++;
}
?>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</div>


<ol>

</ol>

<script src="dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>