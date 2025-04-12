<?php

$mahasiswa =[['salwa', '243040081','salwaalya008@gmail.com','Teknik Informatika'],['vicka', '243040073','vickaaulia@gmail.com','Teknik Informatika', [85,100,75]]];
echo $mahasiswa[1][2];
echo "<br>";
echo $mahasiswa [0][1];
echo "<br>";
echo $mahasiswa [1][1][2];

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h2>Daftar Mahasiswa</h2>
    <ul>
        <li>Nama:</li>
        <li>NIM:</li>
        <li>email:</li>
        <li>Jurusam:</li>
    </ul>
    <?php endforeach; ?>
</body>
</html>

