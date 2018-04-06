<?php


namespace App\Service\StarbuzzDecorator\Condiment;

class Mocha extends CondimentDecoratorAbstract
{

    /**
     * @return string
     */
    public function getDescription()
    {
        return $this->beverage->getDescription() . ", Mocha";
    }

    /**
     * @return double
     */
    public function cost()
    {
        return 0.2 + $this->beverage->cost();
    }
}