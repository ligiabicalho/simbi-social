
# Teste técnico Simbi Social
Teste realizado de acordo com as orientações recebidas por e-mail.

## Pré-requisitos para rodar localmente
Antes de começar, verifique se você atendeu aos seguintes requisitos:

Você instalou a versão LTS do Node.js e do npm.
Você instalou o Composer.
Você tem um ambiente de desenvolvimento PHP configurado (recomendado Laravel Homestead ou XAMPP).
Passos para clonar e rodar o repositório

## 1. Clonando o Repositório
```sh
git clone https://github.com/usuario/nome-do-repositorio.git
cd nome-do-repositorio
``` 

## 2. Configuração do Backend (Laravel)
Navegue até o diretório do backend:
```sh
cd backend
```

3. Copie o arquivo de exemplo .env e configure suas variáveis de ambiente:

```sh
cp .env.example .env
```

- Edite o arquivo .env e configure os valores conforme seu ambiente. Principalmente:

```
DB_CONNECTION=mysql
DB_HOST=127.0.0.1
DB_PORT=3306
DB_DATABASE=nome_do_banco
DB_USERNAME=usuario
DB_PASSWORD=senha
```

4. Instale as dependências do PHP usando o Composer:

```sh
composer install
```

5. Execute as migrações do banco de dados:

```sh
php artisan migrate
```

6. Popule o banco de dados com dados iniciais:

```sh
php artisan db:seed
```

7. Inicie o servidor Laravel:

```sh
php artisan serve
```

O backend estará disponível em http://localhost:8000/api.

## 8. Configuração do Frontend (ReactJS)
Navegue até o diretório do frontend:

```sh
cd frontend
```

9. Copie o arquivo de exemplo .env e configure suas variáveis de ambiente:

```sh
cp .env.example .env
```

- Edite o arquivo .env e configure os valores conforme seu ambiente. Principalmente:

```
REACT_APP_API_URL=http://localhost:8000/api
```

10. Instale as dependências do Node.js usando o npm:

```sh
npm install
```

11. Inicie o servidor de desenvolvimento do React:

```sh
npm start
```

O frontend estará disponível em http://localhost:3000.

### Considerações Finais

- Certifique-se de que ambos os servidores (backend e frontend) estão rodando simultaneamente.  
- Caso esteja utilizando um ambiente de desenvolvimento diferente, ajuste as variáveis de ambiente (.env) conforme necessário.  
- Para obter mais detalhes sobre o uso do Laravel ou do React, consulte a documentação oficial: Laravel e React.  
