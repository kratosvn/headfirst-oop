<?php

namespace App\Service\IntrumentManagerV2;

use App\Service\IntrumentManagerV2\InstrumentSpec;
use App\Service\IntrumentManagerV2\InstrumentType;
use App\Service\IntrumentManagerV2\Instrument;

class Inventory
{
    private $inventories = [];

    public function addInstrument($serialNumber, $price, InstrumentSpec $spec)
    {
        $instrument = new Instrument($serialNumber, $price, $spec);
        $this->inventories[] = $instrument;
    }

    public function get($serialNumber)
    {
        foreach ($this->inventories as $inventory) {
            if ($inventory->serialNumber == $serialNumber) {
                return $serialNumber;
            }
        }

        return null;
    }

    /**
     * @param \App\Service\IntrumentManagerV2\InstrumentSpec $searchSpec
     * @return array
     */
    public function search(InstrumentSpec $searchSpec)
    {
        $returnList = [];

        foreach ($this->inventories as $inventory) {
            $inventorySpec = $inventory->getSpec();
            if ($inventorySpec->matches($searchSpec)) {
                $returnList[] = $inventory;
            }
        }

        return $returnList;
    }
}