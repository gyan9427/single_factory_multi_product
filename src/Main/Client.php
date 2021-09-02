<?php

namespace Src\Main;

use Src\Products\KyrgyzstanProduct;
use Src\Products\MoldovaProduct;
use Src\Factory\CountryFactory;

class Client
{
    private $countryFactory;

    public function __construct()
    {
        $this->countryFactory = new CountryFactory();
        // echo $this->countryFactory->doFactory(new KyrgyzstanProduct());
        echo $this->countryFactory->doFactory(new MoldovaProduct());
    }
}