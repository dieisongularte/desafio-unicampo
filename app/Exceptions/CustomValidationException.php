<?php

namespace App\Exceptions;

use Exception;
use Illuminate\Validation\ValidationException;

class CustomValidationException extends Exception
{
    private $exception;

    public function __construct(ValidationException $exception)
    {
        $this->exception = $exception;
    }

    /**
     * Render the exception as an HTTP response.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function render($request)
    {
        $msg = "Os dados informados são inválidos.";
        $data = $this->exception->errors();
        return response()->json(['message' => $msg, 'errors' => $data], 422);
    }
}
