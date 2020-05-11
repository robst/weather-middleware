<?php

namespace App\OpenWeatherMap\Service;

use App\OpenWeatherMap\Entity\OpenWeatherMapData;
use App\OpenWeatherMap\Exception\CityNotFoundException;
use App\OpenWeatherMap\Hydrator\OpenWeatherDataHydrator;
use App\OpenWeatherMap\Repository\OpenWeatherMapRepository;

class OpenWeatherMapService
{
    /**
     * @var OpenWeatherDataHydrator
     */
    protected $hydrator;

    /**
     * @var OpenWeatherMapRepository
     */
    protected $repository;

    public function __construct(OpenWeatherDataHydrator $hydrator, OpenWeatherMapRepository $openWeatherMapRepository)
    {
        $this->hydrator = $hydrator;
        $this->repository = $openWeatherMapRepository;
    }

    /**
     * @param string $city
     * @return OpenWeatherMapData
     * @throws CityNotFoundException
     */
    public function loadWeatherDataForCity(string $city): OpenWeatherMapData
    {
        $object = $this->repository->findByCity($city);
        $entity = $this->hydrator->toEntity($object);

        return $entity;
    }
}