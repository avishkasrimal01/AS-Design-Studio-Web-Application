<!-- //chatgpt code without modify -->

<?php
session_start();

// Initialize the cart if not already set
if (!isset($_SESSION['cart'])) {
    $_SESSION['cart'] = [];
}

// Function to add a product to the cart
function addToCart($productId, $productName, $price, $quantity)
{
    if (!isset($_SESSION['cart'][$productId])) {
        $_SESSION['cart'][$productId] = [
            'name' => $productName,
            'price' => $price,
            'quantity' => $quantity,
        ];
    } else {
        // If product already exists in the cart, update the quantity
        $_SESSION['cart'][$productId]['quantity'] += $quantity;
    }
}

// Function to calculate the total price of the cart
function calculateTotal()
{
    $total = 0;
    foreach ($_SESSION['cart'] as $product) {
        $total += $product['price'] * $product['quantity'];
    }
    return $total;
}

// Check if a product is being added to the cart
if ($_SERVER['REQUEST_METHOD'] === 'POST' && isset($_POST['add_to_cart'])) {
    $productId = $_POST['product_id'];
    $productName = $_POST['product_name'];
    $price = $_POST['price'];
    $quantity = $_POST['quantity'];

    addToCart($productId, $productName, $price, $quantity);
}

// Check if a product quantity is being updated in the cart
if ($_SERVER['REQUEST_METHOD'] === 'POST' && isset($_POST['update_quantity'])) {
    $productId = $_POST['product_id'];
    $quantity = $_POST['quantity'];

    // Update the quantity in the cart
    $_SESSION['cart'][$productId]['quantity'] = $quantity;
}

// Check if the cart is being cleared
if ($_SERVER['REQUEST_METHOD'] === 'POST' && isset($_POST['clear_cart'])) {
    // Clear the cart
    $_SESSION['cart'] = [];
}

// Redirect the user back to the cart page
header('Location: ../Cart/cart.html');
exit();
