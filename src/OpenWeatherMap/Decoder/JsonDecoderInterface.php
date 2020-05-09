<?php

namespace App\OpenWeatherMap\Decoder;

interface JsonDecoderInterface
{
    public function decode($json, $schema = null);
}
