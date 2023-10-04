<?php
class Product {
    private $id;
    private $name;
    private $price;

    public function __construct($id, $name, $price) {
        $this->id = $id;
        $this->name = $name;
        $this->price = $price;
    }

    public function getFormattedPrice() {
        return number_format($this->price, 2);
    }

    public function showDetails() {
        echo "Product ID: " . $this->id . "\n";
        echo "Product Name: " . $this->name . "\n";
        echo "Product Price: $" . $this->getFormattedPrice() . "\n";
    }
}

// Example usage:
$product1 = new Product(1, "T-shirt", 19.99);

$product1->showDetails();
