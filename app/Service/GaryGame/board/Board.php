<?php

namespace board;

use unit\Unit;

class Board
{
    private $width;
    private $height;
    private $tiles;

    function __construct($width, $height)
    {
        $this->width = $width;
        $this->height = $height;
        $this->initialize();
    }

    private function initialize()
    {
        $this->tiles = [$this->width];
        for ($i = 0; $i < $this->width; $i++) {
            $this->tiles[$i] = [$this->height];
            for ($j = 0; $j < $this->width; $j++) {
                $this->tiles[$i] = [$this->height];
            }
        }
    }

    public function getTile($horizontalAxis, $verticalAxis):Tile
    {
        return (Tile)($this->tiles[$horizontalAxis - 1][$verticalAxis - 1]);
    }

    public function addUnit(Unit $unit, $horizontalAxis, $verticalAxis)
    {
        $this->getTile($horizontalAxis, $verticalAxis);
    }

    public function removeUnits($horizontalAxis, $verticalAxis)
    {
        $tile = $this->getTile($horizontalAxis, $verticalAxis);
        //$tile->removeUnit();
    }

    public function getUnits($horizontalAxis, $verticalAxis)
    {

    }
}