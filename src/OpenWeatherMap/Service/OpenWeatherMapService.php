<?php

namespace App\OpenWeatherMap\Service;

use App\OpenWeatherMap\Entity\OpenWeatherMapData;
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

    public function loadWeatherDataForCity(string $city): OpenWeatherMapData
    {
        $object = $this->repository->findByCity($city);
        $entity = $this->hydrator->toEntity($object);

        return $entity;
    }
}