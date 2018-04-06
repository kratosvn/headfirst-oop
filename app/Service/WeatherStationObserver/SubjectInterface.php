<?php

namespace App\Service\WeatherStationObserver;

interface SubjectInterface
{
    public function registerObserver(ObserverInterface $ob);
    public function removeObserver(ObserverInterface $ob);
    public function notifyObserver();
}