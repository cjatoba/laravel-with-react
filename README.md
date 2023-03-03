## Passos para iniciar o projeto:

```shell
cp .env.example .env
```

Alterar a chave LOCAL_USER no arquivo .env para o nome do usuário local
Adicionar uma senha na chave DB_PASSWORD no arquivo .env


```shell
docker-compose up -d
docker-compose exec app bash
composer install
php artisan key:generate
php artisan migrate
```

Acessar o projeto na porta 8990 `http://localhost:8990`
