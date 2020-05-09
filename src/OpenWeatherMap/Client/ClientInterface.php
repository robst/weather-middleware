<?php


namespace App\OpenWeatherMap\Client;

use Psr\Http\Client\ClientInterface as PsrClientInterface;

interface ClientInterface extends PsrClientInterface
{
    /**
     * @param string $url
     * @return string
     */
    public function getResponseFromUri(string $uri): string;
}