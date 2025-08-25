<!DOCTYPE html>
<html>
<head>
    <title>Cadastrar Usuário</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
    <style>
        body, html { margin:0; font-family: Arial, sans-serif; }
        .bg-wave { background: linear-gradient(160deg, #FF5C8D, #FF8CA1); height:100vh; display:flex; justify-content:center; align-items:center; }
        .card-form { background:white; border-radius:25px; padding:30px; width:350px; box-shadow:0 10px 25px rgba(0,0,0,.2); }
        .btn-red { background-color:#FF5C8D; color:white; border-radius:20px; width:100%; margin-top:10px; }
        .btn-red:hover { background-color:#FF2E63; }
        a { color:#FF5C8D; text-decoration:none; display:block; text-align:center; margin-top:10px; }
    </style>
</head>
<body>
<div class="bg-wave">
    <div class="card-form">
        <h3 class="text-center mb-3">Cadastrar Usuário</h3>
        @if($errors->any())
            <div class="alert alert-danger">
                <ul>@foreach($errors->all() as $error)<li>{{ $error }}</li>@endforeach</ul>
            </div>
        @endif
        <form method="POST" action="{{ route('users.store') }}">
            @csrf
            <input type="text" name="name" placeholder="Nome completo" class="form-control mb-2" required>
            <input type="email" name="email" placeholder="Email" class="form-control mb-2" required>
            <input type="password" name="password" placeholder="Senha" class="form-control mb-2" required>
            <button class="btn btn-red">Cadastrar</button>
        </form>
        <a href="{{ route('users.index') }}">Voltar</a>
    </div>
</div>
</body>
</html>
