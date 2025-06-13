<?php
//PENGULANGAN!!

echo "<h2>Pengulangan 1 - 10</h2>";

for ($i = 1; $i <= 100; $i++) {
    echo $i . "<br>";
}


$jum_angkot = 10;
$no_angkot = 1;
$angkot_rusak = 5;

while ($no_angkot <= $jum_angkot - $angkot_rusak) {
    echo "angkot no. $no_angkot beroprasi dengan baik. <br>";

    $no_angkot++;
}

for ($no_angkot; $no_angkot <= $jum_angkot; $no_angkot++) {
    echo "angkot no $no_angkot sedang rusak.<br>";
}

echo "<hr>";


$i = 1;
while ($i < 15) {
    echo "teguh albab <br>";
    $i++;
}

$no_angkot = 1;
while ($no_angkot <= 10) {
    echo "angkot no. $no_angkot beroprasi dengan baik. <br>";

    $no_angkot++;
}

echo "<hr>";

$i = 30;
do {
    echo "situraja bagus <br>";
    $i++;
} while ($i < 20);
