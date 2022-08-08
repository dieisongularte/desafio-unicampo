<?php

namespace App\Exceptions;

use Exception;
use Throwable;

class CustomInternalServerErrorException extends Exception
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
        return response()->json(["error" => "Não foi possível concluir a operação. " . $this->exception->getMessage()], 500);
    }
}
