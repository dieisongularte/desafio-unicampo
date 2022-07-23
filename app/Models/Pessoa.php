<?php

namespace App\Models;

use Illuminate\Database\Eloquent\SoftDeletes;

class Pessoa extends Model
{
    use SoftDeletes;

    protected $table = "pessoas";

    protected $fillable = [
        "nome_completo",
        "data_nascimento",
        "tipo",
        "cpf_cnpj",
        "email",
        "endereco",
        "latitude",
        "longitude"
    ];

    protected $hidden = [
        "created_at",
        "updated_at",
        "deleted_at"
    ];

    protected $dates = [
        "data_nascimento"
    ];
}
