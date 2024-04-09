<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <?php
    $first_arr = [];

    $first_arr["math"] = [
        ["name" => "celine", "score" => 100],
        ["name" => "lin", "score" => 99],
        ["name" => "wang", "score" => 91],
        ["name" => "chang", "score" => 95]
    ];
    $first_arr["history"] = [
        ["name" => "celine", "score" => 100],
        ["name" => "lin", "score" => 98],
        ["name" => "wang", "score" => 92],
        ["name" => "chang", "score" => 96]
    ];
    $first_arr["js"] = [
        ["name" => "celine", "score" => 100],
        ["name" => "lin", "score" => 97],
        ["name" => "wang", "score" => 93],
        ["name" => "chang", "score" => 95]
    ];
    $first_arr["php"] = [
        ["name" => "celine", "score" => 100],
        ["name" => "lin", "score" => 96],
        ["name" => "wang", "score" => 94],
        ["name" => "chang", "score" => 96]
    ];
    ?>
    <table align="center" border="1" width="700">
        <tr>
            <th align="center">name</th>
            <th align="center">math</th>
            <th align="center">history</th>
            <th align="center">js</th>
            <th align="center">php</th>
        </tr>
        <?php
        foreach ($first_arr["math"] as $key => $value) {
            echo "<tr>";
            echo "<td align='center'><center>" . $value["name"] . "</center></td>";
            foreach ($first_arr as $key2 => $value2) {
                echo "<td align='center'><center>" . $value2[$key]["score"] . "</centre></td>";
            }
            echo "</tr>";
        }
        ?>
    </table>
</body>

</html>