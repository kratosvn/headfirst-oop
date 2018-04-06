<?php

namespace App\Service\StarbuzzDecorator\Condiment;

use App\Service\StarbuzzDecorator\BeverageAbstract;

abstract class CondimentDecoratorAbstract extends BeverageAbstract
{
    /**@var BeverageAbstract $beverage*/
    protected $beverage;

    function __construct(BeverageAbstract $beverage)
    {
        $this->beverage = $beverage;
    }
}