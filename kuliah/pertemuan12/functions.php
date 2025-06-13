<?php

function koneksi()
{

    $conn = mysqli_connect('localhost', 'root', '', 'pw2024_a_243040003');
    return $conn;
}

function query($query)

{

    $conn = koneksi();


    // quary ke tabel mahasiswa
    $result = mysqli_query($conn, $query);


    // ubah datanya ke dlm array
    $rows = [];
    while ($row = mysqli_fetch_assoc($result)) {
        $rows[] = $row;
    }
    return $rows;
}
