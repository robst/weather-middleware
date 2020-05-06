<?php

namespace App\OpenWeatherMap\Client;

use GuzzleHttp\Client as GuzzleClient;
use Psr\Http\Message\RequestInterface;
use Psr\Http\Message\ResponseInterface;

class Client extends GuzzleClient implements ClientInterface
{
    public function sendRequest(RequestInterface $request): ResponseInterface
    {
        return $this->send($request);
    }
}
