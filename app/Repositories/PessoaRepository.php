<?php

namespace App\Repositories;

use Illuminate\Database\Eloquent\ModelNotFoundException;
use App\Models\Pessoa;
use App\Utils\Utils;
use Illuminate\Http\Request;

class PessoaRepository
{
    public function save(Request $request)
    {
        $requestData = $request->all();
        $pessoa = new Pessoa;
        $pessoa->fill($requestData)->save();
        return $pessoa;
    }

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