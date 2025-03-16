<?php

//DATE
//untuk menampilkan tanggal dengan format tertentu
echo date("1, d-M-Y");

echo "<hr>";

//TIME
//echo time ();
echo date("j MY", time() + 60 * 60 * 24 * 200);

echo "<hr>";

//MKTIME
//membuat sendiri detik
//(0,0,0,0,0,0)
//jam, menit, detik, bulan, tanggal, tahun
echo date("1, d MY", mktime(0, 0, 0, 2, 24, 2006));

echo "<hr>";

//STRTOTIME
echo date("1, d MY", strtotime(" 24 feb 2006"));

echo "<hr>";

echo "Hello World";
