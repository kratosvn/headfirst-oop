<?php


namespace App\Service\StarbuzzDecorator;


class HouseBlend extends BeverageAbstract
{
    function __construct()
    {
        $this->description = 'House Blend Coffee';
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
        return 0.89;
    }
}