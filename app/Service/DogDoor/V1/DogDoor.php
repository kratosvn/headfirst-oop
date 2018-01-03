<?php
namespace App\Service\DogDoor\V1;

class DogDoor
{
    private $open;

    function __construct()
    {
        $this->open = false;
    }

    public function open()
    {
        echo 'The dog door opens.';
        $this->open = true;

        return 'The dog door opens.';
    }

    public function close()
    {
        echo 'The dog door closes.';
        $this->open = false;

        return 'The dog door closes.';
    }

    public function isOpen()
    {
        return $this->open;
    }

    public function getOpen(){
        return $this->open;
    }
}