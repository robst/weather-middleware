<?php

namespace App\OpenWeatherMap\Decoder;

use Webmozart\Json\JsonDecoder as WebmozartJsonDecoder;

class JsonDecoder extends WebmozartJsonDecoder implements JsonDecoderInterface
{
    public function decode($json, $schema = null)
    {
        return parent::decode($json, $schema);
    }
}