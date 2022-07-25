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

    /**
    * @OA\Post(
    * path="/api/pessoa",
    * operationId="Pessoa",
    * tags={"Pessoa"},
    * summary="Pessoa Register",
    * description="Pessoa Register here",
    *     @OA\RequestBody(
    *         @OA\JsonContent(),
    *         @OA\MediaType(
    *            mediaType="multipart/form-data",
    *            @OA\Schema(
    *               type="object",
    *               required={"nome_completo","data_nascimento", "tipo", "cpf_cnpj", "email", "endereco", "latitude", "longitude"},
    *               @OA\Property(property="nome_completo", type="string"),
    *               @OA\Property(property="data_nascimento", type="date"),
    *               @OA\Property(property="tipo", type="string"),
    *               @OA\Property(property="cpf_cnpj", type="string"),
    *               @OA\Property(property="email", type="string"),
    *               @OA\Property(property="endereco", type="string"),
    *               @OA\Property(property="latitude", type="number"),
    *               @OA\Property(property="longitude", type="number"),
    *            ),
    *        ),
    *    ),
    *      @OA\Response(
    *          response=201,
    *          description="Register Successfully",
    *          @OA\JsonContent()
    *       ),
    *      @OA\Response(
    *          response=422,
    *          description="Unprocessable Entity",
    *          @OA\JsonContent()
    *       ),
    * )
    */
    public function store(PessoaRequest $request)
    {
        return response()->json($this->repository->save($request), 201);
    }
}
