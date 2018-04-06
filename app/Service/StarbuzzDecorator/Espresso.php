<?php


namespace App\Service\StarbuzzDecorator;


class Espresso extends BeverageAbstract
{
    function __construct()
    {
        $this->description = 'Espresso';
    }

    /**
     * @return string
     */
    public function getDescription()
    {
        return $this->description;
    }

    /**
     * @return double
     */
    public function cost()
    {
        return 1.99;
    }
}