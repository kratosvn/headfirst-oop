<?php


namespace App\Service\StarbuzzDecorator\Condiment;

class Milk extends CondimentDecoratorAbstract
{

    /**
     * @return mixed
     */
    public function getDescription()
    {
        return $this->beverage->getDescription() . ", Milk";
    }

    /**
     * @return double
     */
    public function cost()
    {
        return 0.1 + $this->beverage->cost();
    }
}