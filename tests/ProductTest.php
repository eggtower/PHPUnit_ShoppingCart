<?php
require_once "./vendor/autoload.php";

use PHPUnit\Framework\TestCase;
use Shopping\Product;

class ProductTest extends TestCase
{
    /**
     * @covers Shopping\Product
     */
    public function testProduct()
    {
        $product1 = new Product();
        $name = "棒球";
        $price = 100;
        $amount = 3;
        $product1->setName($name);
        $product1->setPrice($price);
        $product1->setQuantity($amount);
        $product2 = new Product(["name"=>$name,"price"=>$price,"amount"=>$amount]);

        //test
        $this->assertEquals($product2,new Product(["name"=>$name,"price"=>$price,"amount"=>$amount]));
        $this->assertIsString($product1->getName());
        $this->assertEquals($name, $product1->getName());
        $this->assertIsInt($product1->getPrice());
        $this->assertEquals($price, $product1->getPrice());
        $this->assertIsInt($product1->getAmount());
        $this->assertEquals($amount, $product1->getAmount());
    }
}

?>

