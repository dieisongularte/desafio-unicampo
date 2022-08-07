#!/bin/bash

filename=".env"

#Atualiza as dependências do projeto
composer update

#Instala as dependências do projeto
composer install

#Gerar um cópia do arquivo .env.example renomeando para .env na raiz do projeto
if [ ! -f "$filename" ]; then
    cp "$filename.example" $filename
fi

#Gerar a chave da aplicação
php artisan key:generate

#Criar cache de configuração
php artisan config:cache

echo "Deseja executar as migrations? (s/n)"
read run_migrate;

if [ $run_migrate == "s" ];
then
    php artisan migrate
fi

printf "\n"

echo "Deseja popular o banco de dados com dados fake? (s/n)"
read run_seed;

if [ $run_seed == "s" ];
then
    php artisan db:seed
fi

printf "\n"

echo "Deseja subir o servidor de desenvolvimento do PHP? (s/n)"
read run_serve;

if [ $run_serve == "s" ];
then
    php artisan serve
fi
