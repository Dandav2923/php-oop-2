<?php 
require_once __DIR__ . '/classes/Product.php';
require_once __DIR__ . '/classes/User.php';

try {
    $product = new Product('Magic Keyboard', 99, null, 'Apple', null);
    $product->setProductType('Hardware');
    var_dump($product);
} catch (\Throwable $th) {
    //throw $th;
}

?>