<?php


namespace board;

use unit\Unit;

class Tile
{

    private $units;

    function __construct()
    {
        $this->units = [];
    }

    protected function addUnit(Unit $unit)
    {
        $this->units[] = $unit;
    }

    protected function removeUnit(Unit $unit)
    {
        return array_diff($this->units, [$unit]);
    }
}