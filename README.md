# Desafio Unicampo

## Descrição do projeto

Teste técnico para vaga de Back-End, desenvolvido para avaliação.

# Pré-requisitos

Antes de começar, será necessário que tenha em sua máquina:

-   Banco de dados MySQL;
-   Laravel: ^8.75;
-   PHP ^7.3|^8.0
-   Também precisará ter instalado o Composer, um servidor como Apache/Nginx. Como alternativa você pode usar o XAMPP que já fornece o PHP, o servidor Apache e o banco de dados MySQL.

# Como usar

```bash
#Clone este repositório
$ git clone https://github.com/dieisongularte/desafio-unicampo.git
```

## Iniciando a API

```bash
#Acesse o diretório do projeto
$ cd desafio-unicampo

#instale as dependências da Api
$ composer install

#Executar as migrations com dados fake
$ php artisan migrate --seed

#Subir a Api
$ php artisan serve

#A API então será iniciada na porta 8000
```
