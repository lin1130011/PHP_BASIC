<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>陣列實作</title>
    <style>
        tr,
        th,
        td {
            border: 1px solid black;
        }
    </style>
</head>

<body>
    <?php
    $arr = [];
    $a = [];
    $a = [
        1 => "a",
        2 => "b",
        3 => "c"
    ];
    $a[1] = "a";
    $a[2] = "b";
    $a[3] = "c";
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
    <h1>第一種方法</h1>
    <table>
        <tr>
            <th>　　</th>
            <th>國文</th>
            <th>英文</th>
            <th>數學</th>
            <th>地理</th>
            <th>歷史</th>
        </tr>

        <?php
        foreach ($arr["國文"] as $data) {
            echo "<tr>";
            echo "<td>" . $data["name"] . "</td>";
            foreach ($arr as $subject => $scores) {
                foreach ($scores as $score) {
                    if ($score["name"] === $data["name"]) {
                        echo "<td>" . $score["score"] . "</td>";
                    }
                }
            }
            echo "</tr>";
        }
        ?>
    </table>
    <h2>第二種方法</h2>
    <?php
    $arr = [];

    $arr["judy"] = [
        ["國文" => 95],
        ["英文" => 64],
        ["數學" => 70],
        ["地理" => 90],
        ["歷史" => 84],
    ];
    $arr["amo"] = [
        ["國文" => 88],
        ["英文" => 78],
        ["數學" => 54],
        ["地理" => 81],
        ["歷史" => 71],
    ];
    $arr["john"] = [
        ["國文" => 45],
        ["英文" => 60],
        ["數學" => 68],
        ["地理" => 70],
        ["歷史" => 62],
    ];
    $arr["peter"] = [
        ["國文" => 59],
        ["英文" => 32],
        ["數學" => 77],
        ["地理" => 54],
        ["歷史" => 42],
    ];
    $arr["hebe"] = [
        ["國文" => 71],
        ["英文" => 62],
        ["數學" => 80],
        ["地理" => 62],
        ["歷史" => 64],
    ];
    ?>
    <!-- 製作做表頭 -->
    <table>

        <?php
        echo "<tr>";
        echo "<th>　　</th>";
        foreach ($arr["judy"] as $data) {
            foreach ($data as $key => $value) {
                echo "<th>$key</th>";
            }
        }
        echo "<tr>";
        // 製作表格內容
        foreach ($arr as $key => $data) {
            echo "<tr> <td>";
            echo "$key </td>";
        }
        ?>
    </table>
</body>

</html>