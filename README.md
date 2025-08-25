<p align="center">
  <a href="https://laravel.com" target="_blank">
    <img src="https://raw.githubusercontent.com/laravel/art/master/logo-lockup/5%20SVG/2%20CMYK/1%20Full%20Color/laravel-logolockup-cmyk-red.svg" width="400" alt="Laravel Logo">
  </a>
</p>

<p align="center">
<a href="https://github.com/laravel/framework/actions"><img src="https://github.com/laravel/framework/workflows/tests/badge.svg" alt="Build Status"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://img.shields.io/packagist/dt/laravel/framework" alt="Total Downloads"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://img.shields.io/packagist/v/laravel/framework" alt="Latest Stable Version"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://img.shields.io/packagist/l/laravel/framework" alt="License"></a>
</p>

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

UserManagement/
├─ app/
│ ├─ Http/
│ │ ├─ Controllers/
│ │ │ ├─ AuthController.php # Controle de autenticação
│ │ │ ├─ UserController.php # CRUD de usuários
│
├─ database/
│ ├─ migrations/
│ │ ├─ create_users_table.php # Estrutura da tabela de usuários
│
├─ resources/
│ ├─ views/
│ │ ├─ welcome.blade.php # Tela inicial
│ │ ├─ login.blade.php # Tela de login
│ │ ├─ register.blade.php # Tela de cadastro
│ │ ├─ edit-password.blade.php # Tela de edição de senha
│ │ ├─ dashboard.blade.php # Dashboard
│
├─ routes/
│ ├─ web.php # Definição das rotas

---


## 🎓 Objetivo Acadêmico

O objetivo deste sistema é **fixar conceitos fundamentais do framework Laravel**, explorando:

* Estrutura **MVC (Model-View-Controller)**.
* Definição de **rotas** e uso de **controllers**.
* Construção de **views** com Blade e estilização com Bootstrap.
* Implementação de um CRUD completo em banco de dados.
* Autenticação simples (login/logout).
* Recuperação de senha básica.

---

## 🚀 Por que aprender Laravel é importante?

Aprender **Laravel** é fundamental para desenvolvedores que desejam se destacar no mercado, pois ele é atualmente **um dos frameworks PHP mais utilizados no mundo**.  
Dominar Laravel proporciona:

- **Produtividade:** ele oferece ferramentas prontas que aceleram o desenvolvimento de aplicações robustas.
- **Organização:** incentiva boas práticas de arquitetura de software, como o uso de MVC.
- **Segurança:** já vem com recursos integrados para lidar com autenticação, criptografia e proteção contra ataques comuns.
- **Escalabilidade:** pode ser usado desde pequenos projetos acadêmicos até sistemas corporativos de grande porte.
- **Comunidade ativa:** conta com uma ampla comunidade de desenvolvedores, documentação extensa e pacotes prontos que facilitam a evolução do projeto.

Para estudantes e desenvolvedores iniciantes, aprender Laravel significa **ganhar confiança no desenvolvimento backend**, adquirindo habilidades práticas que podem ser aplicadas em projetos acadêmicos, portfólios profissionais e até mesmo em oportunidades no mercado de trabalho.

---

## ✨ Autor
Projeto acadêmico desenvolvido por **Ana Lauren**, com fins de aprendizado em **Laravel + Bootstrap**.
