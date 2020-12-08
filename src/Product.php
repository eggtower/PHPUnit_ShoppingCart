<?php namespace Shopping;

class Product
{

    protected $name;
    protected $price;
    protected $amount;

    /**
     * 初始化商品
     *
     * @param array $attr 傳入設定陣列初始化物件
     */
    public function __construct(array $attr = [])
    {
        if(isset($attr["name"])){
            $this->name = $attr["name"];
        }
        if(isset($attr["price"])){
            $this->price = $attr["price"];
        }
        if(isset($attr["amount"])){
            $this->amount = $attr["amount"];
        }
    }

    /**
     * 設定商品名稱
     *
     * @param string $name
     * @return Product
     */
    public function setName(string $name): Product
    {
        $this->name = $name;
        return $this;
    }
    
    /**
     * 設定商品價格
     *
     * @param integer $price
     * @return Product
     */
    public function setPrice(int $price): Product
    {
        $this->price = $price;

        return $this;
    }

    /**
     * 設定商品數量
     *
     * @param integer $quantity
     * @return Product
     */
    public function setQuantity(int $quantity): Product
    {
        $this->amount = $quantity;
        return $this;
    }

    /**
     * 取得商品名稱
     *
     * @return string
     */
    public function getName(): string
    {
        return $this->name;
    }

    /**
     * 取得商品價格
     *
     * @return integer
     */
    public function getPrice(): int
    {
        return $this->price;
    }

    /**
     * 取得商品數量
     *
     * @return integer
     */
    public function getAmount(): int
    {
        return $this->amount;
    }

}

?>