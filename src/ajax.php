<?php
session_start();
include('functions.php');

global $cart;
$cart = isset($_SESSION['cart'])? $_SESSION['cart']: array();

$id = $_POST['id'];
$name = $_POST['name'];
$price = $_POST['price'];
$action= $_POST['action'];

switch ($action) {
    case 'add':
        $data = addToCart($id, $name, $price);
}
echo json_encode($data);
// echo $data;
