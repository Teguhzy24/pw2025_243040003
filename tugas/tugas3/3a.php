<?php

echo "<h4>Menghitung Luas Lingkaran</h4>";

function hitungluaslingkaran($jarijari)
{
    $luas = pi() * $jarijari * $jarijari;
    return $luas;
}

$jarijari = 10;

echo "Jari jari = " . $jarijari . " cm <br>";
echo "Luas lingkaran = " . hitungluaslingkaran($jarijari) . " ";

echo "<hr>";

echo "<h4>Menghitung Keliling Lingkaran</h4>";

function hitungkelilinglingkaran($jarijari)
{
    $keliling = 10 * pi() * $jarijari * $jarijari;
    return $keliling;
}

$jarijari = 20;

echo "Jari jari = " . $jarijari . " cm <br>";
echo "Luas keliling = " . hitungkelilinglingkaran($jarijari) . " ";

echo "<hr>";
