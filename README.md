# Api-Freight
Projeto Api-Freight

##Instalação

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

