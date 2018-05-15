# HandsOn Laravel

## Pré-requisitos

Alguns programas devem estar pré instalados em seu sistema operacional para que o ambiente funcione corretamente.
**IMPORTANTE: Verifique a versão correta do seu sistema operacional**

  - [Composer](https://getcomposer.org/)  (Gerenciador de pacotes)
  - [Docker](https://www.docker.com/)
  - [Docker Compose](https://docs.docker.com/compose/install/)

# Verificando se possui os pré requisitos
Para verificar a versão instalada:
  - Composer
```sh
$ composer --v
```
- Docker
```sh
$ docker version
```
- Docker Composer
```sh
$ docker-compose version
```

# Criando o ambiente de desenvolvimento

Crie o diretório do seu projeto
  - para **Windows**: crie em **C:/Eduzz**
  - para **Linux/Mac**: crie em **~/eduzz**

Acesse o diretório criado utilizando o comando **cd eduzz**
```sh
$ cd eduzz
```
Realize o clone do repositório em seu sistema
```sh
$ git clone https://github.com/diogomainardes/handson-laravel.git
```
Acesse o diretório clonado utilizando o comando **cd handson-laravel**
```sh
$ cd handson-laravel
```
Baixa a última versão do Laravel (5.6) utilizando o seguinte comando
```sh
$ composer create-project --prefer-dist laravel/laravel website
```
Dentro deste repositório haverá o arquivo do **docker-compose.yml**. Suba seu ambiente. 
```sh
$ docker-compose rm
$ docker-compose up --build
```
Acesse **http://localhost:8000** para ver a tela inicial do Laravel

Acesse **http://localhost:8080** para acessar o PHPMyAdmin e gerenciar seu banco de dados

**Perfeito!**
Agora você tem o ambiente de desenvolvimento pronto, com Nginx + PHP-FPM + MySQL + PHPMyAdmin. 
Aproveite o HandsOn!

## Dúvidas
Em caso de dúvidas ou problemas com relação a instalação do ambiente, contatar pelo Workchat e/ou Whatsapp.