<?php

namespace App\OpenWeatherMap\Hydrator;

use App\OpenWeatherMap\Entity\EntityInterface;
use App\OpenWeatherMap\Entity\Main;

class MainHydrator implements HydratorInterface
{

    public function toEntity(object $object): EntityInterface
    {
        $entity = new Main();

        $entity
            ->setHumidity($object->humidity)
            ->setPressure($object->pressure)
            ->setTemp($object->temp)
            ->setTempMax($object->temp_max)
            ->setTempMin($object->temp_min);


        return $entity;
    }
}
