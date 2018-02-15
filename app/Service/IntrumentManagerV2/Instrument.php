<?php
/**
 * Created by PhpStorm.
 * User: Kratos
 * Date: 2/12/2018
 * Time: 9:14 PM
 */

namespace App\Service\IntrumentManagerV2;

use App\Service\IntrumentManagerV2\InstrumentSpec;

class Instrument
{
    protected $serialNumber;
    protected $price;
    protected $spec;

    function __construct($serialNumber, $price, $spec)
    {
        $this->price = $price;
        $this->serialNumber = $serialNumber;
        $this->spec = $spec;
    }

    /**
     * @return mixed
     */
    public function getPrice()
    {
        return $this->price;
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
    public function getSpec()
    {
        return $this->spec;
    }
}