# Teste técnico Simbi Social


## Pré-requisitos
Antes de começar, verifique se você atende aos seguintes requisitos:

- Versão LTS do Node.js e do npm.
- Composer.
- PHP configurado (recomendado Laravel Homestead ou XAMPP).


# Passos para clonar e rodar o repositório localmente

## 1. Clonando o Repositório
```sh
git clone https://github.com/usuario/nome-do-repositorio.git
cd simbi-teste
```

## 2. Configuração do Backend (Laravel)
Navegue até o diretório do backend:

```sh
cd backend
```

Copie o arquivo de exemplo .env e configure suas variáveis de ambiente:

```sh
cp .env.example .env
```

Edite o arquivo .env e configure os valores conforme seu ambiente. Principalmente:

```plaintext
DB_CONNECTION=mysql
DB_HOST=127.0.0.1
DB_PORT=3306
DB_DATABASE=nome_do_banco
DB_USERNAME=usuario
DB_PASSWORD=senha
```

Instale as dependências do PHP usando o Composer:

```sh
composer install
```

Execute as migrações do banco de dados:

```sh
php artisan migrate
```

(Opcional) Popule o banco de dados com dados iniciais:

```sh
php artisan db:seed
```

Inicie o servidor Laravel:

```sh
php artisan serve
```

O backend estará disponível em http://localhost:8000.

<strong>A documentação da API no Swagger pode ser acessada pela rota `/api/documentation`</strong>

## 3. Configuração do Frontend (ReactJS)
Navegue até o diretório do frontend:

```sh
cd frontend
```

Copie o arquivo de exemplo .env e configure suas variáveis de ambiente:

```sh
cp .env.example .env
```

Edite o arquivo .env e configure os valores conforme seu ambiente. Principalmente:

```plaintext
REACT_APP_API_URL=http://localhost:8000/api
```

Instale as dependências do Node.js usando o npm:

```sh
npm install
```

Inicie o servidor de desenvolvimento do React:

```sh
npm start
```

O frontend estará disponível em http://localhost:3000.

### Considerações Finais
Certifique-se de que ambos os servidores (backend e frontend) estão rodando simultaneamente.
Caso esteja utilizando um ambiente de desenvolvimento diferente, ajuste as variáveis de ambiente (.env) conforme necessário.
Para obter mais detalhes sobre o uso do Laravel ou do React, consulte a documentação oficial: Laravel e React.

