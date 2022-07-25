<?php

namespace App\Http\Controllers;

use App\Repositories\SearchAddressRepository;

class SearchAddressController extends Controller
{
    private $repository;

    public function __construct(SearchAddressRepository $repository)
    {
        $this->repository = $repository;
    }

    /**
     * @OA\Get(
     * path="/api/search_address/{cep}",
     * summary="Get Address Details",
     * description="Get Address by CEP",
     * operationId="GetAddressDetails",
     * tags={"Search Address"},
     * security={ {"bearer": {} }},
     * @OA\Parameter(
     *    description="Informe um cep",
     *    in="path",
     *    name="cep",
     *    required=true,
     *    example="87005010",
     *    @OA\Schema(
     *       type="string"     
     *    )
     * ),
     *    @OA\Response(
     *        response=200,
     *        description="Search Successfully",
     *        @OA\JsonContent()
     *    ),
     *    @OA\Response(response=404, description="Resource Not Found"),
     * )
     */
    public function searchAddress($cep)
    {
        return response()->json($this->repository->searchAddress($cep));
    }
}
