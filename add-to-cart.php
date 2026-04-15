<?php
session_start();

$name = $_POST['name'];
$price = floatval($_POST['price']);

$cart = $_SESSION['cart'] ?? [];

$cart[] = [
    'name' => $name,
    'price' => $price,
    'quantity' => 1
];

$_SESSION['cart'] = $cart;

header("Location: " . $_SERVER['HTTP_REFERER']);
exit;