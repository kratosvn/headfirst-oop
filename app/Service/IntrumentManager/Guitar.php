<?php
/**
 * Created by PhpStorm.
 * User: Kratos
 * Date: 2/6/2018
 * Time: 11:33 PM
 */

namespace App\Service\IntrumentManager;

use App\Service\IntrumentManager\InstrumentAbstract;
use App\Service\IntrumentManager\InstrumentSpecAbstract;

class Guitar extends InstrumentAbstract
{
    public function __construct($serialNumber, $price, InstrumentSpecAbstract $spec)
    {
        parent::__construct($serialNumber, $price, $spec);
    }
}