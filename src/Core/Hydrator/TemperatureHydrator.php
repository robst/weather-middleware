<?php

namespace App\Core\Hydrator;

use App\Core\Entity\EntityInterface;

class TemperatureHydrator implements HydratorInterface
{
    public function toArray(EntityInterface $entity): array
    {
        return [
            'current' => $entity->getCurrentTemperature(),
            'min' => $entity->getMinTemperature(),
            'max' => $entity->getMaxTemperature()
        ];
    }
}
