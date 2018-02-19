# CRUD de usuários
Crud de usuários e administradores usando Laravel 5.5
### Demo
[http://lab-crud.tk](http://lab-crud.tk/) 
**Login do Usuario user** 
user@devlud.com.br
**Senha do Usuario user** 
secret 
### Acesso ao Admin 
[http://lab-crud.tk/admin](http://lab-crud.tk/admin) 
**Login do Administrador** 
admin@devlud.com.br 
**Senha do Administrador** 
secret 

### Requerimentos
- PHP >= 7.1
- OpenSSL PHP Extension
- PDO PHP Extension
- Mbstring PHP Extension
- Tokenizer PHP Extension
- XML PHP Extension

### Instalação
 - Criar o arquivo .env e preencher as respectivas configurações do banco de dados
- Rodar o composer
```sh
$ cd "pasta do projeto"
$ composer install
```
- Criar as tabelas usando migrations
```sh
$ cd "pasta do projeto"
$ php artisan migrate
```
- Popular as tabelas usando seeds (Necessário para logar como administrador com as credencias fornecidas no início deste documento)
```sh
$ cd "pasta do projeto"
$ php artisan db:seed
```

### Pacotes e Bibliotecas utilizadas
* [laravel-twbs4](https://github.com/laravelnews/laravel-twbs4) - Frontend preset para usar o Bootstrap 4 no Laravel (por padrão o Laravel 5.5 vem com o Bootstrap 3)
* [iseed](https://github.com/orangehill/iseed) - Geração de seeds a partir das tabelas
* [jQuery DataTables API](https://github.com/yajra/laravel-datatables) - jQuery DataTables API
* [pt-br-validator](https://github.com/LaravelLegends/pt-br-validator) - Validações em pt-BR
* [multi-auth](https://github.com/Hesto/multi-auth) - Pacote multi-auth


