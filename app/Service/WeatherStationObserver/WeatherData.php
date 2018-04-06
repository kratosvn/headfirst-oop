<?php

namespace App\Service\WeatherStationObserver;

class WeatherData implements SubjectInterface
{
    protected $listSubscriber = [];

    public function registerObserver(ObserverInterface $ob)
    {
        $this->listSubscriber[get_class($ob)] = $ob;
    }

    public function removeObserver(ObserverInterface $ob)
    {
        unset($this->listSubscriber[get_class($ob)]);
    }

    public function notifyObserver()
    {
        /**@var ObserverInterface $subscriber*/
        foreach ($this->listSubscriber as $subscriber) {
            $subscriber->update();
        }
    }

    public function getTemperature()
    {

    }

    public function getHumidity()
    {

    }

    public function measurementsChanges()
    {
        $this->notifyObserver();
    }
}