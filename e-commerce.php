<?php 
require_once __DIR__ . '/classes/Product.php';
require_once __DIR__ . '/classes/User.php';

try {
    $product = new Product('Magic Keyboard', 'Hardware', 99, null, null);
    $product->setProductBrand('Apple');
    echo $product->getProductName();
} catch (\Exception $error) {
    echo $error->getMessage();
}

?>