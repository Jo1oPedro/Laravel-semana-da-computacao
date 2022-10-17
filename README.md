# Apresentação Laravel para a semana da computação 

| **Sumário** |
|-------------|
| [Como executar o projeto inicial](#como-executar-o-projeto-inicial) |

## Como executar o projeto inicial
\* É necessário ter o _PHP 8.0+_ e o _Laravel 9_ instalados. Download para fazer a instalação: https://www.apachefriends.org/pt_br/download.html <br>
\* É necessário ter o composer instalado. Download para fazer a instalação: https://getcomposer.org/ <br>
\* É necessário ter o node instalado para executar o npm install. Donwload para fazer a instalação: https://nodejs.org/en/
1. Abra o Terminal na Pasta do Projeto;
2. Instale as dependências necessárias: `composer install`;
3. Atualize as dependências: `composer update`;
4. Rode o comando `php artisan storage:link` para linkar a pasta de storage com a pasta public;
5. Crie um arquivo .env na pasta raiz e após isso copie o conteudo do .env.example para dentro do arquivo .env;
6. Crie uma key com `php artisan key:generate`. A key servira para as hashes;
7. Crie um banco de dados `sql` com o nome de `laravel`;
8. Instale o npm com `npm install` e depois rode `npm run dev` e `npm run build`;
