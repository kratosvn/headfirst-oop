<?php
/**
 * Created by PhpStorm.
 * User: Kratos
 * Date: 2/6/2018
 * Time: 11:57 PM
 */

namespace App\Service\IntrumentManager;


class Inventory
{
    private $inventories = [];

    public function addInstrument($serialNumber, $price, InstrumentSpecAbstract $spec) {
        if ($spec instanceof GuitarSpec) {
            $this->inventories[] = new Guitar($serialNumber, $price, $spec);
        } elseif ($spec instanceof MandolinSpec) {
            $this->inventories[] = new Mandolin($serialNumber, $price, $spec);
        }
    }

    public function get($serialNumber) {
        foreach ($this->inventories as $inventory) {
            if ($inventory->serialNumber == $serialNumber) {
                return $serialNumber;
            }
        }

        return null;
    }

    /**
     * @param MandolinSpec $searchSpec
     * @return array
     */
    public function search(InstrumentSpecAbstract $searchSpec) {
        $returnList = [];

        foreach ($this->inventories as $inventory) {
            $inventorySpec = $inventory->getSpec();
            if (get_class ($inventorySpec) == get_class($searchSpec)) {
                if ($inventorySpec->matches($searchSpec)) {
                    $returnList[] = $inventory;
                }
            }
        }

        return $returnList;
    }

}