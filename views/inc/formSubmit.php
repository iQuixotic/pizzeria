<?php 

// include 'connection.php';

if (isset($_POST["Submit"])) {

    if (isset($_POST["mushroom"])) {
        $PrepArr = array(
            $_POST["mushroom"], $_POST["peps"], $_POST["green_pepper"], $_POST["red_pepper"],
            $_POST["ham"], $_POST["mozzarella"], $_POST["olive"], $_POST["onion"],
            $_POST["pineapple"], $_POST["provolone"], $_POST["spinach"], $_POST["tomato"]);

        foreach ($PrepArr as $elem) {
            if ($elem !== "NA") {
                $toppingsArr[] = $elem;
                $price = $price + .4;
                $toppings = implode(", ", $toppingsArr);
            }
        }
        sendTheQuery();

    } else {
        sendTheQuery();

    }
} else {
    $toppings = '';
}

function sendTheQuery() {
    global $price, $size, $customer, $toppings, $price_by_size, $j;
    $Query="INSERT INTO orders(customer, size, toppings, price) 
    VALUES('$customer', '$size', '$toppings', '$price')";
    $Execute=mysql_query($Query);
}


?>