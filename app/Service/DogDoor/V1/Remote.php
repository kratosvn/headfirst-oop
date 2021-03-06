<?php
/**
 * Created by PhpStorm.
 * User: Kratos
 * Date: 1/14/2018
 * Time: 1:57 AM
 */

namespace App\Service\DogDoor\V1;

class Remote
{
    private $dogDoor;

    function __construct(DogDoor $dogDoor)
    {
        $this->dogDoor = $dogDoor;
    }

    public function pressButton()
    {
        echo '<br>Press the remote control button...';
        if($this->dogDoor->isOpen()){
            $this->dogDoor->close();
        }else{
            $this->dogDoor->open();
        }

        return $this->dogDoor->getOpen();
    }
}