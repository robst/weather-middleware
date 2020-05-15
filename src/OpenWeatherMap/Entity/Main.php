<?php

namespace App\OpenWeatherMap\Entity;

class Main implements EntityInterface
{
    /**
     * @var int
     */
    protected int $temp;

    /**
     * @var int
     */
    protected int $pressure;

    /**
     * @var int
     */
    protected int $humidity;

    /**
     * @var int
     */
    protected int $temp_min;

    /**
     * @var int
     */
    protected int $temp_max;

    /**
     * @return int
     */
    public function getTemp(): int
    {
        return $this->temp;
    }

    /**
     * @param int $temp
     * @return Main
     */
    public function setTemp(int $temp): Main
    {
        $this->temp = $temp;
        return $this;
    }

    /**
     * @return int
     */
    public function getPressure(): int
    {
        return $this->pressure;
    }

    /**
     * @param int $pressure
     * @return Main
     */
    public function setPressure(int $pressure): Main
    {
        $this->pressure = $pressure;
        return $this;
    }

    /**
     * @return int
     */
    public function getHumidity(): int
    {
        return $this->humidity;
    }

    /**
     * @param int $humidity
     * @return Main
     */
    public function setHumidity(int $humidity): Main
    {
        $this->humidity = $humidity;
        return $this;
    }

    /**
     * @return int
     */
    public function getTempMin(): int
    {
        return $this->temp_min;
    }

    /**
     * @param int $temp_min
     * @return Main
     */
    public function setTempMin(int $temp_min): Main
    {
        $this->temp_min = $temp_min;
        return $this;
    }

    /**
     * @return int
     */
    public function getTempMax(): int
    {
        return $this->temp_max;
    }

    /**
     * @param int $temp_max
     * @return Main
     */
    public function setTempMax(int $temp_max): Main
    {
        $this->temp_max = $temp_max;
        return $this;
    }
}
