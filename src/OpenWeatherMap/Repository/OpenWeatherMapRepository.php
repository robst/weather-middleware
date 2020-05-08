<?php

namespace App\OpenWeatherMap\Repository;

use App\OpenWeatherMap\Client\ClientInterface;
use Webmozart\Json\JsonDecoder;

class OpenWeatherMapRepository
{
    /**
     * @var ClientInterface
     */
    protected $client;

    /**
     * @var JsonDecoder
     */
    protected $decoder;

    /**
     * @var string
     */
    protected $appId;

    public function __construct(ClientInterface $client, JsonDecoder $decoder, string $appId)
    {
        $this->client = $client;
        $this->decoder = $decoder;
        $this->appId = $appId;
    }

    /**
     * @param string $city
     * @return object
     * @throws \Webmozart\Json\ValidationFailedException
     */
    public function findByCity(string $city): object
    {
        $uri = sprintf("weather?q=%s&APPID=%s&units=metric", $city, $this->appId);
        $response = $this->client->request('GET', $uri)->getBody()->getContents();

        return $this->decoder->decode($response);
    }
}
