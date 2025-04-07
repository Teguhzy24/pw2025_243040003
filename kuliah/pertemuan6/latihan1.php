<?php

$hari = array('senin', 'selasa', 'rabu');
$bulan = ['januari', 'february', 'maret'];
$myarray = ['teguh', '19', 'true'];

//menampilkan array
//menampilkan seluruh isi(hanya untuk debugging)
var_dump($hari);
echo "<br>";
print_r($bulan);
echo "<br>";
echo $hari[2];
echo "<br>";
echo $myarray[0];
echo "<hr>";

//menambahkan isi aray
//gunakan[]
$hari[] = 'kamis';
$hari[] = "jumat";
print_r($hari);
