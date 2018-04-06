<?php

namespace App\Service\StarbuzzDecorator;

abstract class BeverageAbstract
{
    protected  $description = "Unknown Beverage";

    /**
     * @return string
     */
    public abstract function getDescription();

    /**
     * @return double
     */
    public abstract function cost();

}