<?php

echo "<h2>Array map</h2>";
echo "<hr>";

$users = ["John", "Steve", "Ian", "Duran"];

$users = array_map(function (string $user) {
    return $user . " is an user";
}, $users);

echo sprintf("El array es %s<br>", json_encode($users));

echo "<h2>Array filter - Find product</h2>";
echo "<hr>";

$products = [
    [
        "name" => "Product 1",
        "price" => 10,
    ],
    [
        "name" => "Product 2",
        "price" => 20,
    ],
    [
        "name" => "Product 3",
        "price" => 30,
    ],
];

$product = array_filter($products, function (array $product) {
    return $product["price"] == 20;
});

var_dump($product);

echo "<h2>Array reduce - highest price product</h2>";
echo "<hr>";

$product = array_reduce($products, function (?array $product, array $currentProduct) {
    if (!$product) {
        return $currentProduct;
    }

    if ($product['price'] < $currentProduct['price']) {
        return $currentProduct;
    }

    return $product;
});
var_dump($product);




