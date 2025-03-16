<?php
//nested loop/ pengulangan bersama
$i = 1;

for ($i = 1; $i <= 5; $i++) { //baris
    for ($j = 1; $j <= 4; $j++) { //angka
        echo "$j ";
    }
    echo "<br> ";
}

echo "<hr>";

for ($i = 1; $i <= 5; $i++) { //baris
    for ($j = 1; $j <= 4; $j++) { //angka
        echo "$j ";
    }
    echo "<br> ";
}

echo "<hr>";

for ($i = 1; $i <= 4; $i++) { //baris
    for ($j = 1; $j <= $i; $j++) { //angka
        echo "$j ";
    }
    echo "<br> ";
}

echo "<hr>";

for ($i = 8; $i >= 1; $i--) { //baris
    for ($j = 1; $j <= $i; $j++) { //angka
        echo "$i ";
    }
    echo "<br> ";
}
