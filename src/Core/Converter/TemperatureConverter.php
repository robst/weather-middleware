<?php

namespace App\Core\Converter;

use App\Core\Entity\Temperature;
use App\OpenWeatherMap\Entity\Main;
use App\OpenWeatherMap\Entity\OpenWeatherMapData;

class TemperatureConverter implements ConverterInterface
{
    /**
     * @param OpenWeatherMapData $openWeatherMapData
     * @return Temperature
     */
    public function convertToTemperature(OpenWeatherMapData $openWeatherMapData): Temperature
    {
        /** @var Main $main */
        $main = $openWeatherMapData->getMain();
        $entity = new Temperature();

        $entity
            ->setCurrentTemperature($main->getTemp())
            ->setMinTemperature($main->getTempMin())
            ->setMaxTemperature($main->getTempMax());

        return $entity;
    }
}
