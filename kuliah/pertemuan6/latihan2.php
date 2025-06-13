<?php
//cetak array menggunakan looping
$binatang = ['🐈‍⬛', '🐉', '🐵', '🐘', '🐊'];
$makanan = ['mie ayam', 'bakso', 'ayam geprek', 'siomay', 'telor'];
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cetak Array</title>
</head>

<body>

    <h2>Daftar Binatang</h2>
    <ul>

        <?php for ($i = 0; $i < count($binatang); $i++) { ?>
            <li><?php echo $binatang($i); ?></li>
        <?php }; ?>
    </ul>


    <h2>Daftar Makanan</h2>
    <ul>
        <?php foreach ($makanan as $mkn) : ?>
            <li> <?php echo $mkn; ?> </li>
        <?php endforeach ?>
    </ul>

</body>

</html>