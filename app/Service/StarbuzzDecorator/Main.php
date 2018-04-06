<?php


namespace App\Service\StarbuzzDecorator;

use App\Service\StarbuzzDecorator\Condiment\Milk;
use App\Service\StarbuzzDecorator\Condiment\Mocha;

class Main
{
    public function run() {
        $espresso = new Espresso();
        echo $espresso->getDescription(). ": ".$espresso->cost()."<br>";

        $houseBlend = new HouseBlend();
        $houseBlend = new Mocha($houseBlend);
        $houseBlend = new Milk($houseBlend);
        echo $houseBlend->getDescription(). ": ".$houseBlend->cost()."<br>";
        
    }
}