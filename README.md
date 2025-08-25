<p align="center"><a href="https://laravel.com" target="_blank"><img src="https://raw.githubusercontent.com/laravel/art/master/logo-lockup/5%20SVG/2%20CMYK/1%20Full%20Color/laravel-logolockup-cmyk-red.svg" width="400" alt="Laravel Logo"></a></p>

<p align="center">
<a href="https://github.com/laravel/framework/actions"><img src="https://github.com/laravel/framework/workflows/tests/badge.svg" alt="Build Status"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://img.shields.io/packagist/dt/laravel/framework" alt="Total Downloads"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://img.shields.io/packagist/v/laravel/framework" alt="Latest Stable Version"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://img.shields.io/packagist/l/laravel/framework" alt="License"></a>
</p>

```markdown
# UserManagement - Projeto Acadêmico em Laravel

## 📌 Sobre o Projeto
Este é um **projeto acadêmico** desenvolvido com o intuito de **treinar técnicas em Laravel** (framework PHP) e **Bootstrap** (framework CSS).  
O sistema implementa as principais operações de **CRUD (Create, Read, Update, Delete)**, além de fluxo de autenticação simples com **Login**, **Cadastro** e **Recuperação de Senha**.

O projeto é voltado apenas para **fins de aprendizado**, sem objetivos comerciais.

---

## 🎯 Funcionalidades
- **Tela Inicial (Welcome):**
  - Botão **Entrar** → leva para a tela de Login.
  - Botão **Cadastrar** → leva para a tela de Cadastro.

- **Tela de Cadastro:**
  - Permite registrar um novo usuário com Nome, Email e Senha.
  - Após o cadastro, retorna à tela inicial para login.

- **Tela de Login:**
  - Autenticação via email e senha.
  - Botão "Esqueceu a senha?" → direciona para a tela de Edição de Senha.

- **Tela de Edição de Senha:**
  - Usuário pode redefinir Nome, Email e Nova Senha.

- **Dashboard:**
  - Mostra a frase **"Estou Logado!"**.
  - Contém botão **Sair** (logout).

---

## 🛠️ Tecnologias Utilizadas
- **PHP 8+**
- **Laravel 10**
- **Bootstrap 5**
- **Blade Templates**
- **MySQL**

---

## 📂 Estrutura de Pastas

```

UserManagement/
├─ app/
│  ├─ Http/
│  │  ├─ Controllers/
│  │  │  ├─ AuthController.php   # Controle de autenticação
│  │  │  ├─ UserController.php   # CRUD de usuários
│
├─ database/
│  ├─ migrations/
│  │  ├─ create\_users\_table.php  # Estrutura da tabela de usuários
│
├─ resources/
│  ├─ views/
│  │  ├─ welcome.blade.php       # Tela inicial
│  │  ├─ login.blade.php         # Tela de login
│  │  ├─ register.blade.php      # Tela de cadastro
│  │  ├─ edit-password.blade.php # Tela de edição de senha
│  │  ├─ dashboard.blade.php     # Dashboard
│
├─ routes/
│  ├─ web.php                    # Definição das rotas

````

---

## ⚙️ Como Executar o Projeto

### 1️⃣ Clonar o repositório
```bash
git clone https://github.com/seu-usuario/UserManagement.git
cd UserManagement
````

### 2️⃣ Instalar dependências

```bash
composer install
npm install && npm run dev
```

### 3️⃣ Configurar o ambiente

Crie o arquivo `.env` (copie do `.env.example`) e configure o banco de dados:

```
DB_DATABASE=laravel_a2
DB_USERNAME=root
DB_PASSWORD=
```

### 4️⃣ Executar as migrações

```bash
php artisan migrate
```

### 5️⃣ Rodar o servidor

```bash
php artisan serve
```

Acesse no navegador:
👉 `http://127.0.0.1:8000`

---

## 🎓 Objetivo Acadêmico

Este sistema foi desenvolvido para **fixar conceitos fundamentais do framework Laravel**, como:

* Estrutura MVC.
* Rotas e Controllers.
* Views com Blade e estilização com Bootstrap.
* CRUD completo em banco de dados.
* Autenticação simples (login/logout).
* Recuperação de senha básica.

---

## ✨ Autor

Projeto acadêmico desenvolvido por Ana Lauren, com fins de aprendizado em **Laravel + Bootstrap**.

```
