<?php

$nama_perangkat_keras_komputer =  ["Motherboard", "Processor", "Hard Disk", "PC Coller", "VGA Crad", "SSD"];


?>


<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>tugas 2b</title>
</head>

<body>
    <h1>Macam-macam perangkat keras komputer</h1>

    <ol>
        <?php for ($i = 0; $i < 6; $i++) { ?>
            <li><?php echo $nama_perangkat_keras_komputer[$i]; ?></li>
        <?php } ?>
    </ol>


    <h1>Macam-macam perangkat keras komuter baru</h1>

    <?php
    $nama_perangkat_keras_komputer[] = "Card Reader";
    $nama_perangkat_keras_komputer[] = "Modem";
    ?>

    <ol>
        <?php for ($i = 0; $i < 8; $i++) { ?>
            <li><?php echo $nama_perangkat_keras_komputer[$i]; ?></li>
        <?php } ?>
    </ol>







</body>

</html>