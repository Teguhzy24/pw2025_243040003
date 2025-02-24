<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Catur</title>
    <style>
        table {
          
            border-collapse: collapse;
            display: flex;
            justify-content: center;
            align-items: center; 
            height: 100vh; 
            margin: 0;
        }
        td {
            width: 123px;
            height: 123px;
            border: 2px solid black; 
            
        }
        .black {
            background-color: black;
        }
        .white {
            background-color: white;
        }

    </style>
</head>
<body>
    <table>
        <?php
        for ($i = 0; $i < 5; $i++) { 
            echo "<tr>";
            for ($j = 0; $j < 5; $j++) { 
                $class = ($i + $j) % 2 == 0 ? "black" : "white";
                echo "<td class='$class'></td>";
            }
            echo "</tr>";
        }
        ?>
    </table>
</body>
</html>