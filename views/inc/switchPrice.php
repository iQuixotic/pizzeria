<?php

$price=5;

if (isset( $_POST["size"])) {
    $size = $_POST["size"];
    echo $size;
} else {
    $size = 'SM';
}

if (isset($_POST["size"])) {
    switch ($size) {
        case 'MED':
            priceAdjust(2.00);
            break;
        case 'LG':
            priceAdjust(3.00);
            break;
        case 'XL':
            priceAdjust(4.00);
            break;
        
        default:
            priceAdjust(0);
            break;
    }
} else {
    echo 'not yet';
}

function priceAdjust($arg) {
    global $size;
    global $price;
    $glass=$price+$arg;
    $price=$glass;

    print_r($price);
    print_r($glass);
}




?>