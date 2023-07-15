<?php
if (isset($_POST['submit'])) {
    $name = $_POST['name-user'];
    $quantity = $_POST['quantity-user'];
    $userId = $_POST['user-id'];

    // Prepare the data to be saved
    $product = "";
    $price = 0;
    $cartId = $_POST['cart-id'];

    if ($cartId == 'cart-1') {
        $product = "CHICKEN SOUP";
        $price = 13.5;
    } elseif ($cartId == 'cart-2') {
        $product = "WINGS BUCKET";
        $price = 23.5;
    } elseif ($cartId == 'cart-3') {
        $product = "WINGER BBQ";
        $price = 33.5;
    } elseif ($cartId == 'cart-4') {
        $product = "WINGER COMBO BBQ";
        $price = 23.9;
    } elseif ($cartId == 'cart-5') {
        $product = "CHICKEN STRIPS BBQ";
        $price = 15.9;
    } elseif ($cartId == 'cart-6') {
        $product = "SNACK BUCKET 1 BBQ";
        $price = 20.1;
    } elseif ($cartId == 'cart-7') {
        $product = "9 PCS BUCKET";
        $price = 22.1;
    } elseif ($cartId == 'cart-8') {
        $product = "SNACK BUCKET 2 BBQ";
        $price = 14.1;
    } elseif ($cartId == 'cart-9') {
        $product = "SPAGHETTI BUCKET 1";
        $price = 21;
    } elseif ($cartId == 'cart-10') {
        $product = "SPAGHETTI BUCKET 2";
        $price = 26.7;
    }

    $itemTotal = $price * $quantity;

    // Prepare data to be saved
    $data .= "Name: $name\n";
    $data .= "Quantity: $quantity\n";
    $data .= "Product: $product\n";
    $data .= "Price per item: $" . number_format($price, 2) . "\n";
    $data .= "Total: $" . number_format($itemTotal, 2) . "\n\n";

    // Define the file name and path
    $directory = "../db/";
    $file = $directory . "order_" . str_replace(' ', '_', strtolower($product)) . ".txt";

    // Open file app mode
    $handle = fopen($file, "a");

    // Write data to the file
    fwrite($handle, $data);

    // Close file
    fclose($handle);

    $order_next_page = "../html/index.html";

    echo '<script>';
    echo 'alert("Order successful!");';
    echo 'window.location.href = "' . $order_next_page . '";';
    echo '</script>';
}
?>
