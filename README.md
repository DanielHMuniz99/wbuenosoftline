## Softline Sistemas

## Tecnologias e ferramentas

- PHP 8.1
- Laravel 10.10
- MySQL

#### Comandos de instalação

Execute o composer para instalação dos pacotes
```
composer install
```

Copie o modelo de arquivo .env.example para criar o arquivo .env
```
cp .env.example .env
```

no arquivo .env preencha os campos de conexão `DB_DATABASE`  `DB_USERNAME`  `DB_PASSWORD` com seu banco de dados

Execute o comando para criar as tabelas no banco de dados
```
php artisan migrate
```

Execute o comando para preencher a tabela de usuários
```
php artisan db:seed --class=UsersTableSeeder
```

Execute o comando para iniciar o servidor
```
php artisan serve
```

127.0.0.1