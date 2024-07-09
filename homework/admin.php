<?php
include_once "./api/base.php";
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>蛋糕店</title>
    <link rel="stylesheet" href="./css/style.css">
    <style>
        .navbar {
            background-color: rgba(255, 255, 255, 0);
            border: 2px solid rgba(255, 255, 255, 0.5);
            box-shadow: 0 0 1px rgba(255, 255, 255, 1)
        }
    </style>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
</head>

<body>
    <nav class="navbar navbar-expand-sm navbar-light sticky-lg-top">
        <div class="container d-flex flex-column justify-content-center align-items-centert">
            <div class="text-center">
                <img src="https://picsum.photos/100/100/?random=10">
            </div>
            <ul class="navbar-nav" id='nav1'>
                <li class="nav-item">
                    <a class="nav-link" href="?do=logo">LOGO更換</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="?do=banner">更換輪撥區域</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#">商品介紹</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#footer">聯絡方式</a>
                </li>
            </ul>
        </div>
    </nav>

    <?php
    $do = $_GET['do'] ?? "logo";
    $file = "./backend/{$do}.php";

    if (file_exists($file)) {
        include_once $file;
    } else {
        // include_once "./backend/logo.php";
    }
    ?>

    <div class="banner" id='banner'>


    </div>

    <div class="main" id='sotre'>


    </div>

    <div class="contentype" id='contentype'>

    </div>

    <div class="footer" id='footer'>

    </div>

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script>
    <script>

    </script>
</body>

</html>