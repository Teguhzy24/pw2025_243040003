<?php
require "functions.php";
$mahasiswa = query( "SELECT * FROM mahasiswa
 ORDER BY nama ASC" );

?>

<!DOCTYPE html>
<html lang="en">


<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.13.1/font/bootstrap-icons.min.css">

    <title>Daftar Mahasiswa</title>
</head>

<body>

    <div class="container">
        <div class="row">
            <div class="coll">
            <h1>Daftar Mahasiswa</h1>
    <table class="table table-hover">
        <tr>
            <th>#</th>
            <th>Nama</th>
            <th>NIM</th>
            <th>Email</th>
            <th>Jurusan</th>
            <th>Gambar</th>
            <th>Aksi</th>
        </tr>

        <?php

        $i = 1;

        ?>

        <?php
        foreach ($mahasiswa as $mhs): ?>
            <tr>
                <td><?= $i++;  ?></td>
                <td><?= $mhs['nama']  ?></td>
                <td><?= $mhs['nim']  ?></td>
                <td><?= $mhs['email']  ?></td>
                <td><?= $mhs['jurusan']  ?></td>
                <td>
                    <img src="img/<?= $mhs['gambar'] ?>" width="50">
                </td>
                <td>
                    <a href=""class="btn btn-primary"><i class="bi bi-pencil-fill"></i></a> | <a href=""class="btn btn-danger"><i class="bi bi-trash3-fill"></i></a>
                </td>
            </tr>
        <?php endforeach; ?>
    </table>

            </div>
        </div>

    </div>



   
</body>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4" crossorigin="anonymous"></script>


</html>