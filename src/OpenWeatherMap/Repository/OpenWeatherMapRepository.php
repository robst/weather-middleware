<?php

namespace App\OpenWeatherMap\Repository;

use App\OpenWeatherMap\Client\ClientInterface;
use App\OpenWeatherMap\Decoder\JsonDecoderInterface;
use App\OpenWeatherMap\Exception\CityNotFoundException;
use App\OpenWeatherMap\Exception\ClientException;

class OpenWeatherMapRepository
{
    /**
     * @var ClientInterface
     */
    protected ClientInterface $client;

    /**
     * @var JsonDecoderInterface
     */
    protected JsonDecoderInterface $decoder;

    /**
     * @var string
     */
    protected string $appId;

    public function __construct(ClientInterface $client, JsonDecoderInterface $decoder, string $appId)
    {
        $this->client = $client;
        $this->decoder = $decoder;
        $this->appId = $appId;
    }

    /**
     * @param string $city
     * @return object
     * @throws CityNotFoundException
     */
    public function findByCity(string $city): object
    {
        $uri = sprintf("weather?q=%s&APPID=%s&units=metric", $city, $this->appId);
        try {
            $response = $this->client->getResponseFromUri($uri);

            return $this->decoder->decode($response);
        } catch(ClientException $exception)
        {
            throw new CityNotFoundException($exception->getMessage());
        }
    }
}
