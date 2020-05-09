<?php

namespace App\OpenWeatherMap\Hydrator;

use App\OpenWeatherMap\Entity\Coord;
use App\OpenWeatherMap\Entity\EntityInterface;

class CoordHydrator implements HydratorInterface
{
    public function toEntity(object $object): EntityInterface
    {
        $coord = new Coord();
        $coord
            ->setLat((float)$object->lat)
            ->setLon((float)$object->lon);

        return $coord;
    }
}
