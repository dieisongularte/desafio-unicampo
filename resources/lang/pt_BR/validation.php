<?php

return [

    /*
    |--------------------------------------------------------------------------
    | Validation Language Lines
    |--------------------------------------------------------------------------
    |
    | The following language lines contain the default error messages used by
    | the validator class. Some of these rules have multiple versions such
    | as the size rules. Feel free to tweak each of these messages here.
    |
    */

    'array'         => ['atributo' => ':attribute', 'msg' => 'Deve ser um array;'],
    'boolean'       => ['atributo' => ':attribute', 'msg' => 'Deve ser booleano;'],
    'date'          => ['atributo' => ':attribute', 'msg' => 'Deve ser uma data;'],
    'email'         => ['atributo' => ':attribute', 'msg' => 'Deve ser um endereço de email válido;'],
    'exists'        => ['atributo' => ':attribute', 'msg' => 'Não encontrado;'],
    'integer'   => ['atributo' => ':attribute', 'msg' => 'Deve ser um valor inteiro;'],
    'max' => [
        'numeric'   => ['atributo' => ':attribute', 'msg' => 'Deve ter no máximo :max caracteres;'],
        'string'    => ['atributo' => ':attribute', 'msg' => 'Deve ter no máximo :max caracteres;'],
        'array'     => ['atributo' => ':attribute', 'msg' => 'Deve ter no máximo :max itens;'],
    ],
    'min'       => [
        'numeric'   => 'The :attribute must be at least :min.',
        'file'      => 'The :attribute must be at least :min kilobytes.',
        'string'    => ['atributo' => ':attribute', 'msg' => 'Deve ter no mínimo :min caracteres;'],
        'array'     => ['atributo' => ':attribute', 'msg' => 'Deve ter no mínimo :min item(ns);'],
    ],
    'in'            => ['atributo' => ':attribute', 'msg' => 'Selecione F ou J;'],
    'not_regex'     => ['atributo' => ':attribute', 'msg' => 'Formato inválido;'],
    'numeric'       => ['atributo' => ':attribute', 'msg' => 'Deve ser numérico;'],
    'regex'         => ['atributo' => ':attribute', 'msg' => 'Formato inválido;'],
    'required'      => ['atributo' => ':attribute', 'msg' => 'Obrigatório;'],
    'string'        => ['atributo' => ':attribute', 'msg' => 'Deve ser uma string;'],
    'size'          => [
        'string' => ['atributo' => ':attribute', 'msg' => 'Deve ter :size caracteres;'],
    ],

    /*
    |--------------------------------------------------------------------------
    | Custom Validation Language Lines
    |--------------------------------------------------------------------------
    |
    | Here you may specify custom validation messages for attributes using the
    | convention "attribute.rule" to name the lines. This makes it quick to
    | specify a specific custom language line for a given attribute rule.
    |
    */

    'custom' => [],

    /*
    |--------------------------------------------------------------------------
    | Custom Validation Attributes
    |--------------------------------------------------------------------------
    |
    | The following language lines are used to swap our attribute placeholder
    | with something more reader friendly such as "E-Mail Address" instead
    | of "email". This simply helps us make our message more expressive.
    |
    */

    'attributes' => require_once __DIR__.'/validation_attributes.php'

];
