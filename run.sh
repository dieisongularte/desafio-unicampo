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

#Cria cache de configuração
php artisan config:cache

#Gerar a chave da aplicação
php artisan key:generate

#Executar as migrations com dados fake
$ php artisan migrate --seed

#Subir aplicação
$ php artisan serve

echo "Olá, Mundo!"
