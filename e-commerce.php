<?php 
require_once __DIR__ . '/classes/Product.php';
require_once __DIR__ . '/classes/User.php';

try {
    $product = new Product('Magic Keyboard', 'Hardware', 99, null, null);
    $product->setProductBrand('Apple');
    // var_dump($product);
} catch (\Throwable $th) {
    //throw $th;
}

?>