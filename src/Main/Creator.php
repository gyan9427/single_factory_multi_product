<?php

namespace Src\Main;

use Src\Interfaces\Product;

abstract class Creator
{
    protected abstract function factoryMethod(Product $product);

    public function doFactory($productNow)
    {
        $countryProduct = $productNow;
        $mfg = $this->factoryMethod($countryProduct);
        return $mfg;
    }
}