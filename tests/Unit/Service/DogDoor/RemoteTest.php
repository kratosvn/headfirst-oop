<?php
namespace Service\DogDoor;

use App\Service\DogDoor\V1\DogDoor;
use App\Service\DogDoor\V1\Remote;

class RemoteTest extends \Codeception\Test\Unit
{
    /**
     * @var \UnitTester
     */
    protected $tester;

    protected function _before()
    {
    }

    protected function _after()
    {
    }

    // tests
    public function testPressButtonToOpen()
    {
        $dogDoor = new DogDoor();
        $remote  =new Remote($dogDoor);
        $dogDoor->close();
        $isDoorOpen = $remote->pressButton();
        $this->assertTrue($isDoorOpen);
    }

    // tests
    public function testPressButtonToClose()
    {
        $dogDoor = new DogDoor();
        $remote  =new Remote($dogDoor);
        $dogDoor->open();
        $isDoorClose = !$remote->pressButton();
        $this->assertTrue($isDoorClose);
    }
}