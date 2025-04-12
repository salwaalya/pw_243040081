<?php
$mahasiswa = [
    [
        "nama" => "adrian",
        "nrp" => "243040067",
        "email" => "aadrian@gmai;.com",
        "jurusan" => "Teknik Informatika",
        "gambar" => "1.jpeg.jpeg"
    ],
    [
        "nama" => "ali fauzi",
        "nrp" => "243040002",
        "jurusan" => "Teknik Industri",
        "email" => "alii@gmail.com",
        "gambar" => "2.jpeg"
    ],
    [
        "nama" => "egi",
        "nrp" => "243040008",
        "jurusan" => "Teknik Sipil",
        "email" => "egiiiiii@gmail.com",
        "gambar" => "3.jpeg"
    ],
    [
        "nama" => "shaka",
        "nrp" => "243040029",
        "jurusan" => "Tekniknologi Pangan",
        "email" => "shaka@gmail.com",
        "gambar" => "4.jpeg"
    ],
    [
        "nama" => "salwa",
        "nrp" => "243040077",
        "jurusan" => "Teknik informatika",
        "email" => "salwa@gmail.com",
        "gambar" => "5.jpeg"
    ],
    [
        "nama" => "audi",
        "nrp" => "243040018",
        "jurusan" => "Teknik Informatika",
        "email" => "audi@gmail.com",
        "gambar" => "6.jpeg"
    ],
    [
        "nama" => "arneu",
        "nrp" => "243040004",
        "jurusan" => "Teknik Lingkungan",
        "email" => "arneu@gmail.com",
        "gambar" => "7jpeg.jpeg"
    ],
    [
        "nama" => "areva",
        "nrp" => "243040085",
        "jurusan" => "Teknik Informatika",
        "email" => "areva08@gmail.com",
        "gambar" => "8..jpeg"
    ],
    [
        "nama" => "almira",
        "nrp" => "243040017",
        "jurusan" => "Teknik Sipil",
        "email" => "almira@gmail.com",
        "gambar" => "9.jpeg"
    ],
    [
        "nama" => "reri octa",
        "nrp" => "243040021",
        "jurusan" => "Teknik Informatika",
        "email" => "reriocta@gmail.com",
        "gambar" => "10.jpeg"
    ],
];

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <title>Daftar Mahasiswa</title>
</head>

<body>
    <h1>Daftar Mahasiswa</h1>

    <?php foreach ($mahasiswa as $mhs) : ?>
        <ul>
            <li>
                <img src="img/<?= $mhs["gambar"]; ?>">
            </li>
            <li>Nama : <?= $mhs["nama"]; ?></li>
            <li>NRP : <?= $mhs["nrp"]; ?></li>
            <li>Email : <?= $mhs["email"]; ?></li>
            <li>Jurusan : <?= $mhs["jurusan"]; ?></li>
        </ul>
    <?php endforeach; ?>
</body>

</html>