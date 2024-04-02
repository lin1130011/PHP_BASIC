<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <?php
    $arr = [];

    $arr["國文"] = [
        ["name" => "judy", "score" => 95],
        ["name" => "amo", "score" => 88],
        ["name" => "john", "score" => 45],
        ["name" => "peter", "score" => 59],
        ["name" => "hebe", "score" => 71]
    ];
    $arr["英文"] = [
        ["name" => "judy", "score" => 64],
        ["name" => "amo", "score" => 78],
        ["name" => "john", "score" => 60],
        ["name" => "peter", "score" => 32],
        ["name" => "hebe", "score" => 62]
    ];
    $arr["數學"] = [
        ["name" => "judy", "score" => 70],
        ["name" => "amo", "score" => 54],
        ["name" => "john", "score" => 68],
        ["name" => "peter", "score" => 77],
        ["name" => "hebe", "score" => 80]
    ];
    $arr["地理"] = [
        ["name" => "judy", "score" => 90],
        ["name" => "amo", "score" => 81],
        ["name" => "john", "score" => 70],
        ["name" => "peter", "score" => 54],
        ["name" => "hebe", "score" => 62]
    ];
    $arr["歷史"] = [
        ["name" => "judy", "score" => 84],
        ["name" => "amo", "score" => 71],
        ["name" => "john", "score" => 62],
        ["name" => "peter", "score" => 42],
        ["name" => "hebe", "score" => 64]
    ];

    ?>
    <table border="1">
        <tr>
            <td>　　</td>
            <td>國文</td>
            <td>英文</td>
            <td>數學</td>
            <td>地理</td>
            <td>歷史</td>
        </tr>
        <?php
        foreach ($arr["國文"] as $key => $data) {
            echo "<tr>";
            echo "<td>" . $data["name"] . "</td>";
            foreach ($arr as $key1 => $value1) {
                echo "<td>" . $value1[$key]["score"] . "</td>";
            }
            echo "</tr>";
        }
        ?>

    </table>
</body>

</html>