<?php

namespace App\OpenWeatherMap\Client;

use GuzzleHttp\Client as GuzzleClient;
use GuzzleHttp\Exception\ClientException;
use Psr\Http\Message\RequestInterface;
use Psr\Http\Message\ResponseInterface;
use App\OpenWeatherMap\Exception\ClientException as OpenWeatherMapClientException;

class Client extends GuzzleClient implements ClientInterface
{
    /**
     * @{@inheritDoc}
     */
    public function sendRequest(RequestInterface $request): ResponseInterface
    {
        return $this->send($request);
    }

    /**
     * @{@inheritDoc}
     */
    public function getResponseFromUri(string $uri): string
    {
        try {
            return $this->request('GET', $uri)->getBody()->getContents();
        } catch(ClientException $exception) {
            throw new OpenWeatherMapClientException($exception->getMessage());
        }
    }
}
