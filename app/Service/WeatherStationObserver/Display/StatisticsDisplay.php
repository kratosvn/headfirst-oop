<?php

namespace App\Service\WeatherStationObserver\Display;

use App\Service\WeatherStationObserver\ObserverInterface;
use App\Service\WeatherStationObserver\DisplayElementInterface;
use App\Service\WeatherStationObserver\WeatherData;

class StatisticsDisplay implements ObserverInterface, DisplayElementInterface
{
    function __construct(WeatherData $weatherData)
    {
        $weatherData->registerObserver($this);
    }

    public function update()
    {
        echo "StatisticsDisplay updated<br>";
    }

    public function display()
    {
        // TODO: Implement display() method.
    }
}