<?php

namespace app\Service\WeatherStation;

class Main
{
    public function run()
    {
        $weatherData = new WeatherData();
        $currentConditionsDisplay = new CurrentConditionsDisplay($weatherData);
        $forecastDisplay = new ForecastDisplay($weatherData);
        $statisticsDisplay = new StatisticsDisplay($weatherData);
        $weatherData->notifyObserver();
    }
}

$main = new Main();
$main->run();