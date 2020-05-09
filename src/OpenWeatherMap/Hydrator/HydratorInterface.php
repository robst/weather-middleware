<?php

namespace App\OpenWeatherMap\Hydrator;

use App\OpenWeatherMap\Entity\EntityInterface;

interface HydratorInterface
{
    public function toEntity(object $object): EntityInterface;
}
