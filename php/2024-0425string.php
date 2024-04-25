<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        .targetword {
            color: red;
            font-size: 32px;
        }
    </style>
</head>

<body>
    <?php
    $a = "this,is,a,book";

    $result = explode(",", $a);
    echo "<pre>";
    print_r($result);
    echo "</pre>";
    $result = join(' ', $result);
    echo $result;

    echo "<br>";
    $s = "中央氣象署地震報告顯示，今天凌晨至上午8時22分，共發生14起地震，其中台灣東部海域在凌晨2時11分發生規模5.6地震，不到一分鐘，又發生一起規模5.5地震，全台有感，許多民眾被嚇醒。";
    $new = mb_substr($s, 0, 10);
    echo $new . "...";


    ?>
    <h2>尋找字串與HTML、css整合應用</h2>
    <ul>
        <li>給定一個句子，將指定的關鍵字放大</li>
        <li>“學會PHP網頁程式設計，薪水會加倍，工作會好找”</li>
        <li>請將上句中的 “程式設計” 放大字型或變色.</li>
    </ul>
    <?php
    $str = "學會PHP網頁程式設計，薪水會加倍，工作會好找";
    $target = "程式設計";
    echo "原文為 : $str <br>";
    $result = str_replace($target, "<span class='targetword'>$target</span>", $str);
    echo "修改後 : $result";

    ?>

</body>

</html>