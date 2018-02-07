<?php
/**
 * Created by PhpStorm.
 * User: Kratos
 * Date: 1/9/2018
 * Time: 12:07 AM
 */

namespace App\Service\Guitar;

use App\Service\Guitar\Guitar;

class Inventory
{
    private $guitars;

    function __construct()
    {
        $this->guitars = [];
    }

    public function addGuitar($serialNumber, $builder, $model, $type, $backWood, $topWood, $price)
    {
        $guitar = new Guitar($serialNumber, $builder, $model, $type, $backWood, $topWood, $price);
        $this->guitars[] = $guitar;
    }

    public function getGuitarBySerialNumber($serialNumber)
    {
        foreach ($this->guitars as $guitar) {
            if ($guitar->getSerialNumber() == $serialNumber) {
                return $guitar;
            }
        }

        return null;
    }

    public function search(Guitar $searchGuitar)
    {
        $builder = $searchGuitar->getBuilder();
        $model = $searchGuitar->getModel();
        $type = $searchGuitar->getType();
        $backWood = $searchGuitar->getBackWood();
        $topWood = $searchGuitar->getTopWood();
        foreach ($this->guitars as $guitar) {
            if (!empty($builder) && $builder == $guitar->getBuilder()) {
                return $guitar;
            }
            if (!empty($model) && $model == $guitar->getModel()) {
                return $guitar;
            }
            if (!empty($type) && $type == $guitar->getType()) {
                return $guitar;
            }
            if (!empty($backWood) && $backWood == $guitar->getBackWood()) {
                return $guitar;
            }
            if (!empty($topWood) && $topWood == $guitar->getTopWood()) {
                return $guitar;
            }
        }

        return null;
    }

    public function getGuitarList()
    {
        return $this->guitars;
    }
}