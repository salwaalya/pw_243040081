<?php
function menghitungLuasLingkaran($r)
{
    $luas = pi() * pow($r, 2);
    echo "<h4>Menghitung Luas Lingkaran</h4>";
    echo "Jari-jari = $r cm<br>";
    echo "Luas lingkaran = " . round($luas, 2) . " cm²<br>";
}

function menghitungKelilingLingkaran($r)
{
    $keliling = 2 * pi() * $r;
    echo "<h4>Menghitung Keliling Lingkaran</h4>";
    echo "Jari-jari = $r cm<br>";
    echo "Keliling lingkaran = " . round($keliling, 2) . " cm<br>";
}

menghitungLuasLingkaran(10);
echo "<hr>";
menghitungKelilingLingkaran(20);