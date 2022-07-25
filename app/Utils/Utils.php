<?php

namespace App\Utils;

use Illuminate\Support\Facades\Http;

class Utils
{
    public static function searchAddressByCep($cep)
    {
        $key = config('app.key_google_api');
        $url = config('app.url_google_api') . "?components=postal_code:{$cep}|country:BR&key={$key}";
        $response = Http::acceptJson()->get($url);
        return $response;
    }
}
