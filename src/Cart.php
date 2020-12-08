<?php namespace Shopping;

use Shopping\Product;

class Cart
{
    protected $products = [];

    /**
     * 將商品放入購物車
     *
     * @param Product $product
     * @return Cart
     */
    public function put(Product $product): Cart
    {
        $this->products[] = $product;
        return $this;
    }

    /**
     * 取得所有商品陣列
     *
     * @return array
     */
    public function getProducts(): array
    {
        return $this->products;
    }

    /**
     * 依商品名稱取得購物車內的單個商品
     *
     * @param string $productName 商品名稱
     * @return Product|null
     */
    public function getProduct(string $productName): ?Product
    {
        foreach ($this->products as $product) {
            if($product->getName() == $productName){
                return $product;
            }
        }
        return null;
    }

    /**
     * 取得購物車商品總價
     *
     * @return integer
     */
    public function total(): int
    {
        $total = array_sum(
            array_map(function (Product $product) {
                return $product->getAmount() * $product->getPrice();
        }, $this->products));
        return $total;
    }
}

?>

