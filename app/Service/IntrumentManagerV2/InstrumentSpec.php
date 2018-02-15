<?php

namespace App\Service\IntrumentManagerV2;

/**
 * Created by PhpStorm.
 * User: Kratos
 * Date: 2/12/2018
 * Time: 8:48 PM
 */
class InstrumentSpec
{
    private $properties = [];

    function __construct($properties)
    {
        $this->properties = $properties;
    }

    public function getProperty($propertyName)
    {
        return $this->properties[$propertyName];
    }

    public function getProperties()
    {
        return $this->properties;
    }

    public function matches(InstrumentSpec $otherSpec)
    {
        foreach ($otherSpec as $specName => $specValue) {
            if ($specValue != array_get($this->properties, $specName)) {
                return false;
            }
        }

        return true;
    }
}