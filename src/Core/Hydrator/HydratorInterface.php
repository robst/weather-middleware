<?php

namespace App\Core\Hydrator;

use App\Core\Entity\EntityInterface;

interface HydratorInterface
{
    /**
     * @param EntityInterface $entity
     * @return array
     */
    public function toArray(EntityInterface $entity): array;
}
