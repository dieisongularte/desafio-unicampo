<?php

namespace App\Repositories;

use Illuminate\Database\Eloquent\ModelNotFoundException;
use App\Utils\Utils;

class SearchAddressRepository
{
    public function searchAddress($cep)
    {
        $address = '';
        $response = Utils::searchAddressByCep($cep);
        $status = $response->json('status');

        throw_unless($status == 'OK', ModelNotFoundException::class);
        $result = $response->collect('results')->first();
        $address = $result['formatted_address'];

        return $address;
    }
}