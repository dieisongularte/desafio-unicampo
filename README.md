# Desafio Unicampo

## Descrição do projeto

Teste técnico para vaga de Back-End, desenvolvido para avaliação.

# Pré-requisitos

Antes de começar, será necessário que tenha em sua máquina:

-   Banco de dados MySQL;
-   Laravel: ^8.75;
-   PHP ^7.3|^8.0;
-   Também precisará ter instalado o Composer.

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

#Configuração inicial do banco de dados para funcionamento do projeto
#Essa configuração pode ser alterada conforme a sua base local
$ DB_CONNECTION=mysql
$ DB_HOST=127.0.0.1
$ DB_PORT=3306
$ DB_DATABASE=desafio_unicampo
$ DB_USERNAME=root
$ DB_PASSWORD=

#Gerar um cópia do arquivo .env.example renomeando para .env na raiz do projeto

#Executar as migrations com dados fake
$ php artisan migrate --seed

#Subir a Api
$ php artisan serve

#A API então será iniciada na porta 8000

# Rota para cadastro de Pessoa (Post)
$ http://localhost:8000/api/pessoa

# Rota buscar um endereço pelo cep (Get)
$ http://localhost:8000/api/pessoa/search_address/{cep}

# Rota para acessar documentação swagger
$ http://localhost:8000/api/documentation
```
