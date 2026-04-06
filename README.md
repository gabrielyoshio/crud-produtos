CRUD de Produtos e Fornecedores

Desenvolvido com Laravel, Blade e Bootstrap.

Como rodar o projeto

1. Clone o repositório
2. Instale as dependências
   composer install
3. Copie o arquivo de ambiente
   cp .env.example .env
4. Configure o banco de dados no arquivo `.env`
5. Gere a chave da aplicação
   php artisan key:generate
6. Rode as migrations e seeders
   php artisan migrate --seed
7. Inicie o servidor
   php artisan serve
8. Acesse http://localhost:8000/fornecedores