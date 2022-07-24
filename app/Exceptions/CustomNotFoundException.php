<?php

namespace App\Exceptions;

use Exception;
use Illuminate\Database\Eloquent\ModelNotFoundException;
use Symfony\Component\HttpKernel\Exception\NotFoundHttpException;
use Throwable;

class CustomNotFoundException extends Exception
{
    private $exception;

    public function __construct(Throwable $throwable)
    {
        $this->exception = $throwable;
    }

    /**
     * Render the exception as an HTTP response.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function render($request)
    {
        $message = "Não encontrado.";
        if($this->exception instanceof ModelNotFoundException) {
            $message = "Registro(s) não encontrado(s).";
        } else if($this->exception instanceof NotFoundHttpException) {
            $message = "Rota não encontrada.";
        }
        return response()->json(["error" => $message], 404);
    }
}
