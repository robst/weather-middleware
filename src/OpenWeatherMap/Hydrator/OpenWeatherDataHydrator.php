<?php

namespace App\OpenWeatherMap\Hydrator;

use App\OpenWeatherMap\Entity\EntityInterface;
use App\OpenWeatherMap\Entity\OpenWeatherMapData;

class OpenWeatherDataHydrator implements HydratorInterface
{
    /**
     * @var CoordHydrator
     */
    protected CoordHydrator $coordHydrator;

    /**
     * @var MainHydrator
     */
    protected MainHydrator $mainHydrator;

    public function __construct(CoordHydrator $coordHydrator, MainHydrator $mainHydrator)
    {
        $this->coordHydrator = $coordHydrator;
        $this->mainHydrator = $mainHydrator;
    }

    public function toEntity(object $object): EntityInterface
    {
        $entity = new OpenWeatherMapData();
        $entity
            ->setName($object->name)
            ->setCoord($this->coordHydrator->toEntity($object->coord))
            ->setMain($this->mainHydrator->toEntity($object->main))
        ;

        return $entity;
    }
}
