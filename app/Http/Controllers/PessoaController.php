<?php

namespace App\Http\Controllers;

use App\Http\Requests\PessoaRequest;
use App\Repositories\PessoaRepository;

class PessoaController extends Controller
{
    private $repository;

    public function __construct(PessoaRepository $repository)
    {
        $this->repository = $repository;
    }

    public function store(PessoaRequest $request)
    {
        return response()->json($this->repository->save($request), 201);
    }

    public function searchAddress($cep)
    {
        return response()->json($this->repository->searchAddress($cep));
    }
}
