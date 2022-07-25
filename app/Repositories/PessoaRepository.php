<?php

namespace App\Repositories;

use App\Models\Pessoa;
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
}
