<?php

namespace App\Http\Controllers;
use App\Service\DogDoor\V2\DogDoorSimulator;
use Illuminate\Routing\Controller as BaseController;

class HomeController extends BaseController
{
    public function index(){
        $dogDoorSimulator = new DogDoorSimulator();
        $dogDoorSimulator->run();

        return view('home/index');
    }
}