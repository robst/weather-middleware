<?php

namespace App\OpenWeatherMap\Entity;

class OpenWeatherMapData implements EntityInterface
{
    /**
     * @var Coord
     */
    protected Coord $coord;

    /**
     * @var string
     */
    protected string $name;

    /**
     * @var Main
     */
    protected Main $main;

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
     * @return string
     */
    public function getName(): string
    {
        return $this->name;
    }

    /**
     * @param string $name
     * @return OpenWeatherMapData
     */
    public function setName(string $name): OpenWeatherMapData
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
