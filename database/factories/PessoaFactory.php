<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

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
        $tipo = $this->faker->randomElement(['f', 'j']);
        $cpfCnpj = ($tipo == 'f') ? $this->faker->cpf(false) : $this->faker->cnpj(false);

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
