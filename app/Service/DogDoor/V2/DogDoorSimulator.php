<?php
/**
 * Created by PhpStorm.
 * User: Kratos
 * Date: 1/14/2018
 * Time: 2:01 AM
 */

namespace App\Service\DogDoor\V2;

class DogDoorSimulator
{
    public function run(){
        $dogDoor = new DogDoor();
        $remote = new Remote($dogDoor);
        echo "Fido barks to go outside";
        $remote->pressButton();
    }
}