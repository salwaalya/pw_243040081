<?php
// Membuat Array
$hari = array ('senin','selasa','rabu');
$bulan = ['januari', 'februari','maret'];
$myArray = ['Salwa', 19, true];

// Mencetak / menampilkan Array
// Menampilkan seluruh isi (hanya untuk debugging)
var_dump($hari);
echo "<br>";
print_r($bulan);
echo "<br>";
// Gunakan echo jika ingin mencetak 1 elemen (menggunakan index)
echo $hari[2];
echo "<br>";
echo $myArray[0];
echo "<hr>";

// Menambahkan isi Array
// gunakan []
$hari[] = 'kamis' ;
$hari[] = "Jumat" ;
$bulan[] = 'Maret';
print_r($hari);
echo "<br>";
print_r($bulan);


?>
