# Api-Freight
Projeto Api-Freight

# Instalação

### Clone o projeto
`git clone https://github.com/Alves7777/api-freight`


### Execute o comando abaixo no terminal para adquirir o .env

`cp .env.example .env`

### Crie o banco de dados e adicione no .env

`DB_DATABASE=api_freight`<br>
 `DB_USERNAME=*****` <br>
 `DB_PASSWORD=*****`

### Execute o comando abaixo para instalar as dependências do laravel

`sudo composer install`

### Execute o comando a seguir para gerar as tabelas do banco de dados

`php artisan migrate:fresh`

### Execute o comando a seguir para gerar dados iniciais

`php artisan db:seed`

### Pronto, agora é só adicionar o comando `php artisan serve` para acessar a aplicação

### Acesse o POSTMAN pra gerar o token
### Adicione a rota no método POST com email e senha em formato JSON

`Rota - POST: http://127.0.0.1:8000/api/auth` <br>
`email: lucas@gmail.com` <br>
`senha: 12345678`

### Em seguida, copie o token e cole nos HEADER nas demais ROTAS do projeto.
### Exemplo HEADER:
`New header: Authorization    | New value: cole o token` <br>
`New header: X-Requested-With | New value: XMLHttpRequest` <br>
`New header: Content-Type     | New value: application/json` <br>
