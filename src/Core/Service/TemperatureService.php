<?php

namespace App\Core\Service;

use App\Core\Converter\TemperatureConverter;
use App\Core\Hydrator\TemperatureHydrator;
use App\OpenWeatherMap\Exception\CityNotFoundException;
use App\OpenWeatherMap\Service\OpenWeatherMapService;

class TemperatureService
{
    /**
     * @var OpenWeatherMapService
     */
    protected OpenWeatherMapService $openWeatherMapService;

    /**
     * @var TemperatureConverter
     */
    protected TemperatureConverter $converter;

    /**
     * @var TemperatureHydrator
     */
    protected TemperatureHydrator $hydrator;

    public function __construct(
        OpenWeatherMapService $openWeatherMapService,
        TemperatureConverter $converter,
        TemperatureHydrator $hydrator
    ) {
        $this->openWeatherMapService = $openWeatherMapService;
        $this->converter = $converter;
        $this->hydrator = $hydrator;
    }

    /**
     * @param string $city
     * @return array
     * @throws CityNotFoundException
     */
    public function getTemperatureForCity(string $city): array
    {
        $openWeatherMapData = $this->openWeatherMapService->loadWeatherDataForCity($city);
        $temperature = $this->converter->convertToTemperature($openWeatherMapData);

        return $this->hydrator->toArray($temperature);
    }
}
