<?php

function addToCart($id, $name, $price)
{
    global $cart;
    $product = array('id'=>$id, 'name'=>$name, 'price'=> $price);

    array_push($cart, $product);

    $_SESSION['cart'] = $cart;

    return $cart;
    

}