<?php

use App\Http\Controllers\PessoaController;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

Route::get('/', fn() => response()->json([
    "project" => config("app.name"),
    "version" => "1.0.0"
]));

Route::post('pessoa', [PessoaController::class, 'store']);
Route::get('pessoa/search_address/{cep}', [PessoaController::class, 'searchAddress']);
