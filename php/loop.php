<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>菱形</title>
    <style>
        * {
            font-family: 'Courier New', Courier, monospace;
        }

        table {
            border: solid;
            width: 50%;
            text-align: center;
        }

        tr {
            background-color: lightblue;
        }
    </style>
</head>

<body>
    <?php
    $str = "*";
    $row = 1;
    $colmax = 9;
    $rowmax = 5;
    // 
    $odd = ($star % 2 == 0) ? $star + 1 : $star;
    $mid = (($odd + 1) / 2) - 1;
    ?>
</body>

</html>