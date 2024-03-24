<?php
$mahasiswa = [
    [
    "nama" => "Arinal Haq",
    "nrp" => "233040149",
    "email" => "arinal@gmail.com",
    "jurusan"=> "Teknik Informatika"
    ],
    [
    "nama" => "Asep Kasep",
    "nrp" => "202311059",
    "email" => "asep@gmail.com",
    "jurusan"=> "Teknik Mesin"
    ],
    [
    "nama" => "Abdul Hamid",
    "nrp" => "192312103",
    "email" => "abdul@gmail.com",
    "jurusan"=> "Teknik Lingkungan"
    ],
    [
    "nama" => "Cecep Surecep",
    "nrp" => "212312003",
    "email" => "cecep@gmail.com",
    "jurusan"=> "Teknologi Pangan"
    ],
    [
    "nama" => "Maman Suratman",
    "nrp" => "202332078",
    "email" => "maman@gmail.com",
    "jurusan"=> "Teknik Industri"
    ],
    [
    "nama" => "Adam Hitler",
    "nrp" => "232320029",
    "email" => "adam@gmail.com",
    "jurusan"=> "Perancangan Wilayah dan Kota"
    ],
    [
    "nama" => "Salih Ghani", 
    "nrp" => "233060032",
    "email" => "salih@gmail.com",
    "jurusan"=> "Teknik Sipil"
    ],
    [
    "nama" => "Endo Hanapi",
    "nrp" => "233054078",
    "email" => "endo@gmail.com",
    "jurusan"=> "Teknik Kimia"
    ],
    [
    "nama" => "Ripgi Suteja",
    "nrp" => "233031099",
    "email" => "suteja@gmail.com",
    "jurusan"=> "Teknik Elektro"
    ],
    [
    "nama" => "Wawan Spider",
    "nrp" => "233020069",
    "email" => "wawan@gmail.com",
    "jurusan"=> "Teknik Pertambangan"
    ]

];
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Daftar mahasiswa</title>
</head>

<body>
    <h1>Daftar Mahasiswa</h1>

    <?php foreach($mahasiswa as $mhs) : ?>
    <ul>
        <li>Nama : <?= $mhs["nama"]; ?></li>
        <li>NRP : <?= $mhs["nrp"]; ?></li>
        <li>Email : <?= $mhs["email"]; ?></li>
        <li>Jurusan : <?= $mhs["jurusan"]; ?></li>
    </ul>
    <?php endforeach; ?>

</body>

</html>