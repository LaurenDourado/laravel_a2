<!DOCTYPE html>
<html>
<head>
    <title>Login</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
    <style>
        body, html { height: 100%; margin:0; }
        .bg-wave { background: linear-gradient(160deg, #FF5C8D, #FF8CA1); height: 100%; display: flex; justify-content: center; align-items: center; font-family: 'Arial', sans-serif; }
        .card-login { background: white; border-radius: 25px; padding: 30px; width: 320px; box-shadow: 0px 10px 25px rgba(0,0,0,0.2); }
        .btn-red { background-color: #FF5C8D; color: white; border-radius: 20px; width: 100%; }
        .btn-red:hover { background-color: #FF2E63; }
        a { color: #FF5C8D; text-decoration:none; }
    </style>
</head>
<body>
<div class="bg-wave">
    <div class="card-login">
        <h3 class="text-center mb-3">Login</h3>

        @if(session('success'))
            <div class="alert alert-success">{{ session('success') }}</div>
        @endif

        @if($errors->any())
            <div class="alert alert-danger">
                <ul>@foreach($errors->all() as $error)<li>{{ $error }}</li>@endforeach</ul>
            </div>
        @endif

        <form method="POST" action="{{ route('login') }}">
            @csrf
            <input type="email" name="email" placeholder="Email" class="form-control mb-2" required>
            <input type="password" name="password" placeholder="Senha" class="form-control mb-2" required>
            <button class="btn btn-red mt-2">Entrar</button>
        </form>

        <p class="text-end mt-2"><a href="{{ route('edit.password') }}">Esqueceu a senha?</a></p>
    </div>
</div>
