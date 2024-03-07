# Aplicação Laravel com Cache Redis e PostgreSQL
Esta é uma aplicação Laravel simples que utiliza o Redis como sistema de cache e o PostgreSQL como banco de dados. O banco de dados foi populado usando a biblioteca Faker para facilitar os testes.

## Pré-requisitos

Antes de começar, certifique-se de que seu ambiente atenda aos seguintes requisitos:

- PHP >= 7.3
- Composer instalado (globalmente de preferência)
- Redis instalado e configurado
- PostgreSQL instalado e configurado


## Instalação

1 - Clone o repositório para sua máquina local:
`git clone https://github.com/seu-usuario/sua-aplicacao-laravel.git`

2 - Navegue até o diretório da aplicação:
`cd sua-aplicacao-laravel`

3 - Instale as dependências do Composer:
`composer install`


Copie o arquivo de exemplo .env.example para .env e configure as variáveis de ambiente, incluindo a conexão com o banco de dados PostgreSQL e o cache Redis.

Gere a chave de aplicativo Laravel:

`php artisan key:generate`


Execute as migrações do banco de dados para criar as tabelas necessárias:
`php artisan migrate`

Popule o banco de dados com dados falsos usando a biblioteca Faker:
`php artisan db:seed`


### Testando a Aplicação

`php artisan serve`

Abra seu navegador e acesse _http://localhost:8000._

Explore as diferentes funcionalidades da aplicação, como visualização de dados, busca, etc.

Observe o comportamento do cache Redis conforme você interage com a aplicação.
Para verificar o comportamento no uso do cache instalei utilizei o **debugbar**
`composer require darryvdh/laravel-debugbar --dev`
