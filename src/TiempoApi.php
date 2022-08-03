<?php

namespace App;

use Cmfcmf\OpenWeatherMap;
use Http\Factory\Guzzle\RequestFactory;
use Http\Adapter\Guzzle6\Client as GuzzleAdapter;

class TiempoApi
{
    private OpenWeatherMap $openWeatherMap;

    public function __construct()
    {
        $httpRequestFactory = new RequestFactory();
        $httpClient = GuzzleAdapter::createWithConfig([]);

        $this->openWeatherMap = new OpenWeatherMap('abc1dd4b6505369e3f78e803ebe0b540', $httpClient, $httpRequestFactory);
    }

    public function queTemperaturaHaceEn(string $ciudad): int
    {
        $temperatura = $this->openWeatherMap->getWeather($ciudad, 'metric');

        return $temperatura->temperature->now->getValue();
    }
}