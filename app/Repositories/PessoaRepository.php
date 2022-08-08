<?php

namespace App\Repositories;

use App\Exceptions\CustomInternalServerErrorException;
use App\Models\Pessoa;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class PessoaRepository
{
    public function save(Request $request)
    {
        try{
            DB::beginTransaction();
            $pessoa = new Pessoa;
            $pessoa->fill($request->only($pessoa->getFillable()))->save();
            DB::commit();
            return $pessoa;
        }catch(\Throwable $throwable){
            DB::rollBack();
            throw new CustomInternalServerErrorException($throwable);
        }
    }
}
