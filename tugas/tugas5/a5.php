<?php

$mobol_sport = [
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
    ]



];

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Daftar Mobil Termahal</title>
</head>

<body>
    <h1> 3 MOBIL TERMAHAL DI DUNIA</h1>
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