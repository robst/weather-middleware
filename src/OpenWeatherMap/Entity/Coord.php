<?php

namespace App\OpenWeatherMap\Entity;

class Coord implements EntityInterface
{
    /**
     * @var float
     */
    private $lon;

    /**
     * @var float
     */
    private $lat;

    /**
     * @return float
     */
    public function getLon(): float
    {
        return $this->lon;
    }

    /**
     * @param float $lon
     * @return Coord
     */
    public function setLon(float $lon): Coord
    {
        $this->lon = $lon;
        return $this;
    }

    /**
     * @return float
     */
    public function getLat(): float
    {
        return $this->lat;
    }

    /**
     * @param float $lat
     * @return Coord
     */
    public function setLat(float $lat): Coord
    {
        $this->lat = $lat;
        return $this;
    }
}
