<?php
namespace App\Service\DogDoor\V2;

class DogDoor
{
    private $open;

    function __construct()
    {
        $this->open = false;
    }

    public function open()
    {
        $message = 'The dog door opens.';
        $this->open = true;

        echo $message;

        return 'The dog door opens.';
    }

    public function close()
    {
        $message = 'The dog door closes.';
        $this->open = false;
        echo $message;

        return $message;
    }

    public function isOpen()
    {
        return $this->open;
    }

    public function getOpen(){
        return $this->open;
    }
}