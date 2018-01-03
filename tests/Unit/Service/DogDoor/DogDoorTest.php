<?php

namespace Service;

use App\Service\DogDoor\V1\DogDoor;
use App\Service\DogDoor\V1\DogDoorSimulator;

class DogDoorTest extends \Codeception\Test\Unit
{
    /**
     * @var \UnitTester
     */
    protected $tester;
    /** @var \App\Service\DogDoor\V1\DogDoor $dogDoor */
    protected $dogDoor;

    protected function _before()
    {
        $this->dogDoor = new DogDoor();
    }

    protected function _after()
    {
    }

    public function testOpen()
    {
        $textShow = $this->dogDoor->open();

        $this->assertEquals('The dog door opens.',  $textShow);
        $this->assertTrue($this->dogDoor->getOpen());
    }

    public function testClose()
    {
        $textShow = $this->dogDoor->close();

        $this->assertEquals('The dog door closes.',  $textShow);
        $this->assertTrue(!$this->dogDoor->getOpen());
    }

    public function testIsOpen()
    {
        $this->dogDoor->open();
        $this->assertTrue($this->dogDoor->getOpen());
    }

    public function testCloseOpen()
    {
        $this->dogDoor->close();
        $this->assertTrue(!$this->dogDoor->getOpen());
    }
}