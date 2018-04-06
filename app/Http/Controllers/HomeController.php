<?php

namespace App\Http\Controllers;

use App\Service\StarbuzzDecorator\Main;
use Illuminate\Routing\Controller as BaseController;

class HomeController extends BaseController
{
    public function index()
    {
        $this->decorator();
    }

    public function decorator()
    {
        $main = new Main();
        $main->run();
    }
}