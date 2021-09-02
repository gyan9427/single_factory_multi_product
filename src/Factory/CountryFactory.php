<?php

namespace Src\Factory;

use Src\Main\Creator;

class CountryFactory extends Creator
{
    private $country;

    protected function factoryMethod(Product $product)
    {
        $this->country=$product;
        return($this->country->getProperties());
    }
}