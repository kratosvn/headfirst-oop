<?php

namespace App\Service\IntrumentManager;

use App\Service\IntrumentManager\InstrumentSpecAbstract;

abstract class InstrumentAbstract
{
    private $serialNumber;
    private $price;
    private $spec;

    /**
     * InstrumentAbstract constructor.
     * @param $serialNumber
     * @param $price
     * @param $spec
     */
    public function __construct($serialNumber, $price, InstrumentSpecAbstract $spec)
    {
        $this->serialNumber = $serialNumber;
        $this->price = $price;
        $this->spec = $spec;
    }

    /**
     * @return mixed
     */
    public function getSerialNumber()
    {
        return $this->serialNumber;
    }

    /**
     * @return mixed
     */
    public function getPrice()
    {
        return $this->price;
    }

    /**
     * @return \App\Service\IntrumentManager\InstrumentSpecAbstract
     */
    public function getSpec()
    {
        return $this->spec;
    }
}