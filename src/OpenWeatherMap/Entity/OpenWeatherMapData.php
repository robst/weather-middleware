<?php

namespace App\OpenWeatherMap\Entity;

class OpenWeatherMapData implements EntityInterface
{
    /**
     * @var Coord
     */
    protected $coord;

    /**
     * @var String
     */
    protected $name;

    /**
     * @var Main
     */
    protected $main;

    /**
     * @return Coord
     */
    public function getCoord(): Coord
    {
        return $this->coord;
    }

    /**
     * @param Coord $coord
     * @return OpenWeatherMapData
     */
    public function setCoord(Coord $coord): OpenWeatherMapData
    {
        $this->coord = $coord;
        return $this;
    }

    /**
     * @return String
     */
    public function getName(): String
    {
        return $this->name;
    }

    /**
     * @param String $name
     * @return OpenWeatherMapData
     */
    public function setName(String $name): OpenWeatherMapData
    {
        $this->name = $name;
        return $this;
    }

    /**
     * @return Main
     */
    public function getMain(): Main
    {
        return $this->main;
    }

    /**
     * @param Main $main
     * @return OpenWeatherMapData
     */
    public function setMain(Main $main): OpenWeatherMapData
    {
        $this->main = $main;
        return $this;
    }
}
