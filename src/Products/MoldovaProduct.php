<?php

namespace Src\Products;

use Src\Interfaces\Product;
use Src\Resources\Helpers\FormatHelper;

class Moldovaproduct implements Product
{
    private $mfgProduct;
    private $formatHelper;
    private $countryNow;

    public function getProperties()
    {
        //Loads text writeup from external text file
        $this->countryNow = file_get_contents("CountryWriteups/Moldova.txt");

        $this->formatHelper = new FormatHelper();
        $this->mfgProduct = $this->formatHelper->addTop();
        $this->mfgProduct.="<img src='https://cdn.pixabay.com/photo/2020/09/13/13/00/charles-bridge-5568178_960_720.jpg' class='pixRight' width='208' height='450'>";
        $this->mfgProduct .="<header>Moldova</header>";
        $this->mfgProduct .="<p>$this->countryNow</p>";
        $this->mfgProduct .=$this->formatHelper->closeUp();
        
        return $this->mfgProduct;
    }
}