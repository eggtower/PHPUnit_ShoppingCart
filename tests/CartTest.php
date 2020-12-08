<?php
require_once "./vendor/autoload.php";

use PHPUnit\Framework\TestCase;
use Shopping\Cart;
use Shopping\Product;

class CartTest extends TestCase
{   
    /**
     * @covers Shopping\Cart
     * @covers Shopping\Product
     */
    public function testCart()
    {
        $cart = new Cart();
        $products = [];
        $total = 0;
        for($i = 0; $i < 5; $i++){
            $product = new Product();

            $product->setName(strval($i));
            $product->setPrice($i*10);
            $product->setQuantity($i);
            $products[] = $product;

            $total += $i*10*$i;

            $cart->put($product);
        }
        //test
        $this->assertEquals($products, $cart->getProducts());
        $this->assertEquals($products[1], $cart->getProduct("1"));
        $this->assertIsInt($cart->total());
        $this->assertEquals($total, $cart->total());
    }
}

?>

