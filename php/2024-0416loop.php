<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
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
    $str2 = " &nbsp";
    $row = 1;
    $rowmax = 9;
    $colmax = 9;
    $rowcenter = ceil($rowmax / 2);
    while ($row <= $rowmax) {
        $col = 1;
        while ($col <= $colmax) {
            $colcenter = ceil($colmax / 2);
            $left = $colcenter - $row;
            $right = $colcenter + $row;
            if ($col > $left && $col < $right) {
                echo $str;
            } else {
                echo "&nbsp";
            }
            $col += 1;
        }
        echo "<br>";
        $row += 1;
    }
    ?>


</body>

</html>