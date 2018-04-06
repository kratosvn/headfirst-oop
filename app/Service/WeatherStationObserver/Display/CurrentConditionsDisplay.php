<?php

namespace App\Service\WeatherStationObserver\Display;

use App\Service\WeatherStationObserver\ObserverInterface;
use App\Service\WeatherStationObserver\DisplayElementInterface;
use App\Service\WeatherStationObserver\WeatherData;

class CurrentConditionsDisplay implements ObserverInterface, DisplayElementInterface
{
    function __construct(WeatherData $weatherData)
    {
        $weatherData->registerObserver($this);
    }

    public function update()
    {
        echo "CurrentConditionsDisplay updated<br>";
    }

    public function display()
    {
        // TODO: Implement display() method.
    }
}