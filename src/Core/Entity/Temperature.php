<?php

namespace App\Core\Entity;

class Temperature implements EntityInterface
{
    /**
     * @var int
     */
    protected int $currentTemperature;

    /**
     * @var int
     */
    protected int $maxTemperature;

    /**
     * @var int
     */
    protected int $minTemperature;

    /**
     * @return int
     */
    public function getCurrentTemperature(): int
    {
        return $this->currentTemperature;
    }

    /**
     * @param int $currentTemperature
     * @return Temperature
     */
    public function setCurrentTemperature(int $currentTemperature): Temperature
    {
        $this->currentTemperature = $currentTemperature;
        return $this;
    }

    /**
     * @return int
     */
    public function getMaxTemperature(): int
    {
        return $this->maxTemperature;
    }

    /**
     * @param int $maxTemperature
     * @return Temperature
     */
    public function setMaxTemperature(int $maxTemperature): Temperature
    {
        $this->maxTemperature = $maxTemperature;
        return $this;
    }

    /**
     * @return int
     */
    public function getMinTemperature(): int
    {
        return $this->minTemperature;
    }

    /**
     * @param int $minTemperature
     * @return Temperature
     */
    public function setMinTemperature(int $minTemperature): Temperature
    {
        $this->minTemperature = $minTemperature;
        return $this;
    }
}