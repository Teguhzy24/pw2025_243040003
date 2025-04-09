<?php

$mobol_sport = [

    [
        "Merek" => "Mercedes-Benz 300 SLR Uhlenhaut",
        "Tahun" => "1955",
        "Harga" => "Rp.2,1Triliun",
        "Mesin" => "8 silinder dengan tenaga 300 horsepower (hp)",
        "Gambar" => "Mercedes-Benz 300 SLR Uhlenhaut.png"
    ],


    [
        "Merek" => "Rolls-Royce La Rose Noire Droptail",
        "Tahun" => "2024",
        "Harga" => "US$ 30jt/Rp.450Miliar",
        "Mesin" => "V-12 6,75 liter twin-turbo",
        "Gambar" => "Rolls-Royce1.png "

    ],

    [
        "Merek" => "Rolls-Royce Boat Tail",
        "Tahun" => "2021",
        "Harga" => "US$28jt/Rp.420Miliar",
        "Mesin" => "V12 6.750 cc Twin Turbo yang mampu menghasilkan hingga 563 tenaga kuda",
        "Gambar" => "Rolls-Royce Boat Tail.png"
    ],

    [
        "Merek" => "Bugatti La Voiture Noire",
        "Tahun" => "2019",
        "Harga" => "US$188,7/Rp.277.7Miliar",
        "Mesin" => "W16 Quad-Turbo 8.0-liter, 16 silinder, 4 turbo charger",
        "Gambar" => "Bugatti La Voiture Noire.png"
    ],



    [
        "Merek" => "Pagani Zonda HP Barchetta",
        "Tahun" => "1999",
        "Harga" => "Rp.255Miliar",
        "Mesin" => "AMG V12 7,3 L (445 cu in)",
        "Gambar" => "Pagani Zonda HP Barchetta.png"
    ],

    [
        "Merek" => "Rolls-Royce Sweptail",
        "Tahun" => "2017",
        "Harga" => "Rp.200Miliar",
        "Mesin" => "V12 dengan tenaga 453 hp",
        "Gambar" => "Rolls-Royce Sweptail.png"
    ],

    [
        "Merek" => "Mercedes-Maybach Exelero",
        "Tahun" => "2005",
        "Harga" => "Rp. 124Miliar",
        "Mesin" => "V12 twin-turbo 5.9 liter",
        "Gambar" => "Mercedes-Maybach Exelero.png"
    ],

    [
        "Merek" => "Pagani Huayra Codalunga",
        "Tahun" => "2011",
        "Harga" => "Rp.115Miliar",
        "Mesin" => "V12 enam liter twin-turbo yang menghasilkan 827 tenaga kuda ",
        "Gambar" => "Pagani Huayra Codalunga.png"
    ],

    [
        "Merek" => "Bugatti Divo",
        "Tahun" => "2018",
        "Harga" => "Rp.84Miliar",
        "Mesin" => "quad-turbocharged W16 8.0-liter",
        "Gambar" => "Bugatti Divo.png"
    ],

    [
        "Merek" => "Koenigsegg CC850",
        "Tahun" => "2022",
        "Harga" => "Rp.56Miliar",
        "Mesin" => "V8 twin-turbo 5.0 liter",
        "Gambar" => "Koenigsegg CC850.png"
    ]




];

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Daftar Mobil Termahal</title>
    <style>
        .judul {
            text-align: center;
            margin-bottom: 40px;
        }
    </style>
</head>

<body>

    <div class="judul">
        <h1> 10 MOBIL TERMAHAL DI DUNIA</h1>
    </div>

    <?php foreach ($mobol_sport as $ms) : ?>
        <ul>
            <li>
                <img src="img/<?= $ms["Gambar"]; ?>">
            </li>
            <li> Merek : <?= $ms["Merek"]; ?></li>
            <li> Tahun : <?= $ms["Tahun"]; ?></li>
            <li> Harga : <?= $ms["Harga"]; ?></li>
            <li> Mesin : <?= $ms["Mesin"]; ?></li>
        </ul>
    <?php endforeach; ?>

</body>

</html>