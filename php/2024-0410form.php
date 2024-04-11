<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Initialize variables to store selected items and their prices
    $selected_items = [];
    $selected_prices = [];

    // Process main course
    if (isset($_POST['main_course'])) {
        foreach ($_POST['main_course'] as $main_course) {
            $selected_items[] = $main_course;
            $selected_prices[] = getPrice($main_course);
        }
    }

    // Process dessert
    if (isset($_POST['dessert'])) {
        foreach ($_POST['dessert'] as $dessert) {
            $selected_items[] = $dessert;
            $selected_prices[] = getPrice($dessert);
        }
    }

    // Process drink
    if (isset($_POST['drink'])) {
        foreach ($_POST['drink'] as $drink) {
            $selected_items[] = $drink;
            $selected_prices[] = getPrice($drink);
        }
    }

    // Process set menu
    if (isset($_POST['set_menu'])) {
        $selected_items[] = $_POST['set_menu'];
        $selected_prices[] = getPrice($_POST['set_menu']);
    }

    // Calculate total price
    $total_price = array_sum($selected_prices);

    // Output selected items and their prices
    echo "<h2>您的訂單詳情：</h2>";
    echo "<ul>";
    for ($i = 0; $i < count($selected_items); $i++) {
        echo "<li>" . $selected_items[$i] . " - $" . $selected_prices[$i] . "</li>";
    }
    echo "</ul>";

    // Output total price
    echo "<h2>您的總價為：$" . $total_price . "</h2>";
} else {
    // If the request method is not POST, handle accordingly
    echo "發生錯誤";
}

function getPrice($item)
{
    $price_start = strrpos($item, "$");
    if ($price_start !== false) {
        return (int)substr($item, $price_start + 1);
    } else {
        return 0; // Return 0 if price is not found
    }
}
