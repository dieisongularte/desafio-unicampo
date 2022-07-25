<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use App\Utils\Constants\TipoPessoaConstant;

class PessoaFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        $nome_completo = $this->faker->firstName() . ' ' . $this->faker->lastName();
        $tipo = $this->faker->randomElement([TipoPessoaConstant::FISICA, TipoPessoaConstant::JURIDICA]);
        $cpfCnpj = ($tipo == TipoPessoaConstant::FISICA) ? $this->faker->cpf() : $this->faker->cnpj();

        return [
            "nome_completo" => $nome_completo,
            "data_nascimento" => $this->faker->date(),
            "tipo" => $tipo,
            "cpf_cnpj" => $cpfCnpj,
            "email" => $this->faker->safeEmail(),
            "endereco" => $this->faker->address(),
            "latitude" => $this->faker->latitude(),
            "longitude" => $this->faker->longitude(),
        ];
    }
}
