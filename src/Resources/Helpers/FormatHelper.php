<?php

namespace Src\Resources\Helpers;

class FormatHelper
{
    private $topper;
    private $bottom;
    private $path = "../css/products.css";

    public function addTop()
    {
        
        $path = 'css/products.css';
        
        $this->topper="<!doctype html><html><head>
        <link rel='stylesheet' type='text/css' href=$path/>
        <meta charset='UTF-8'>
        <title>Map Factory</title>
        </head>
        <body>";
        
        return $this->topper;
    }

    public function closeUp()
    {
        $this->bottom = "</body></html>";
        return $this->bottom;
    }
}