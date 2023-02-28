Projeto de avaliação técnica Life.

## Passos para execução do projeto:

* Obs.: É necessário que o docker esteja instalado. O projeto utiliza o Laravel Sail.

Acessar o diretório do projeto via terminal e executar os comandos abaixo:

```shell
docker run --rm --pull=always -v "$(pwd)":/opt -w /opt laravelsail/php82-composer:latest bash -c 'composer install'
```

```shell
./vendor/bin/sail up -d
```

```shell
./vendor/bin/sail artisan migrate
```
