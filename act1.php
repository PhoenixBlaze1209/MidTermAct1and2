<?php


echo "=== GadgetGrove Catalog ===\n\n";


echo "|Basic Product List|\n";

$productNames = ["Smartphone X1", "Wireless Earbuds", "Smartwatch Pro", "Gaming Laptop", "Bluetooth Speaker"];
$productPrices = [699.99, 59.99, 199.99, 1299.99, 89.99];


echo "Available products: " . implode(", ", $productNames) . "\n";


echo "First product price: P" . $productPrices[0] . "\n";
echo "Last product price: P" . $productPrices[count($productPrices)-1] . "\n\n";



echo "|Detailed Product View|\n";

$productDetail = [
    "name" => "Smartwatch Pro",
    "price" => 199.99,
    "brand" => "GadgetGrove",
    "inStock" => true,
    "description" => "A sleek smartwatch with fitness tracking, notifications, and long battery life."
];


echo "Name: " . $productDetail["name"] . "\n";
echo "Price: P" . $productDetail["price"] . "\n";
echo "Brand: " . $productDetail["brand"] . "\n";
echo "Availability: " . ($productDetail["inStock"] ? "In Stock" : "Out of Stock") . "\n";
echo "Description: " . $productDetail["description"] . "\n";


$productDetail["warranty"] = "1 year limited warranty";
echo "Warranty: " . $productDetail["warranty"] . "\n\n";


echo "|Full Catalog|\n";

$catalog = [
    [
        "id" => 1,
        "name" => "Smartphone X1",
        "price" => 699.99,
        "inStock" => true
    ],
    [
        "id" => 2,
        "name" => "Wireless Earbuds",
        "price" => 59.99,
        "inStock" => false
    ],
    [
        "id" => 3,
        "name" => "Smartwatch Pro",
        "price" => 199.99,
        "inStock" => true
    ],
    [
        "id" => 4,
        "name" => "Gaming Laptop",
        "price" => 1299.99,
        "inStock" => true
    ],
    [
        "id" => 5,
        "name" => "Bluetooth Speaker",
        "price" => 89.99,
        "inStock" => true 
    ]
];


foreach ($catalog as $product) {
    echo $product["name"] . " - P" . number_format($product["price"], 2);
    echo $product["inStock"] ? " (Available)\n" : " (Out of Stock)\n";
}

echo "\n=== End of Catalog ===\n";
