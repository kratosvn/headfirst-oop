<?php

namespace App\Service\WeatherStationObserver\Display;

use App\Service\WeatherStationObserver\ObserverInterface;
use App\Service\WeatherStationObserver\DisplayElementInterface;
use App\Service\WeatherStationObserver\WeatherData;

class ForecastDisplay implements ObserverInterface, DisplayElementInterface
{
    function __construct(WeatherData $weatherData)
    {
        $weatherData->registerObserver($this);
    }

    public function update()
    {
        echo "ForecastDisplay updated<br>";
    }

    public function display()
    {
        // TODO: Implement display() method.
    }
}