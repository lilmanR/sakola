<?php
class Product{
    private $name;
    private $price;
    public function __construct($name, $price) {
        $this->name = $name;
        $this->price = $price;
    }
    public function getName(){
        return $this->name;
    }
    public function getPrice(){
        return $this->price;
    }
}
class ProductManager {
    public function calculateDiscount($product){
        return $product ->getPrice() * 0.1;
    }

}
$product = new Product("Phone", 500);
$manager = new ProductManager();
$discount = $manager->calculateDiscount($product);
echo "Discount for($product->getName()): $discount";
