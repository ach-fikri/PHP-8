<?php
class Product
{


    public function __construct(public string $id,
                                public string $name,
                                public int $price = 0,
                                public int $quantity = 0,
                                private bool $exprensive = false )
    {

    }


}

$prooduct = new Product(id : "1", name: "mie ayam", price: 12000);
var_dump($prooduct);

echo $prooduct->name.PHP_EOL;

class Toko
{
    public string $fff;
    public int $sfs;

    /**
     * @param string $fff
     * @param int $sfs
     */
    public function __construct(string $fff, int $sfs)
    {
        $this->fff = $fff;
        $this->sfs = $sfs;
    }

}