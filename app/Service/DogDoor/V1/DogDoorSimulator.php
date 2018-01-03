<?php
/**
 * Created by PhpStorm.
 * User: Kratos
 * Date: 1/14/2018
 * Time: 2:01 AM
 */

namespace App\Service\DogDoor\V1;

class DogDoorSimulator
{
    public function run(){
        $dogDoor = new DogDoor();
        $remote = new Remote($dogDoor);
        echo "Fido barks to go outside";
        $remote->pressButton();
        echo "<br> Fido has gone outside";
        $remote->pressButton();
        echo "<br> Fido all done";
        $remote->pressButton();
        echo "<br> Fido back inside";
        $remote->pressButton();
    }
}