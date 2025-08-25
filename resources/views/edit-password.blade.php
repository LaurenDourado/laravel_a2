<!DOCTYPE html>
<html>
<head>
    <title>Recuperar Acesso</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
    <style>
        body, html { height: 100%; margin:0; }
        .bg-wave { background: linear-gradient(160deg, #FF5C8D, #FF8CA1); height: 100%; display:flex; justify-content:center; align-items:center; font-family: 'Arial', sans-serif; }
        .card-edit { background: white; border-radius: 25px; padding: 30px; width: 320px; box-shadow: 0px 10px 25px rgba(0,0,0,0.2); }
        .btn-red { background-color: #FF5C8D; color: white; border-radius: 20px; width:100%; }
        .btn-red:hover { background-color: #FF2E63; }
        a { color:#FF5C8D; text-decoration:none; }
    </style>
</head>
<body>
<div class="bg-wave">
    <div class="card-edit">
        <h3 class="text-center mb-3">Recuperar Acesso</h3>

        @if(session('success'))
            <div class="alert alert-success">{{ session('success') }}</div>
        @endif

        @if($errors->any())
            <div class="alert alert-danger">
                <ul>@foreach($errors->all() as $error)<li>{{ $error }}</li>@endforeach</ul>
            </div>
        @endif

        <form method="POST" action="{{ route('edit.password') }}">
            @csrf
            <input type="email" name="email" placeholder="Email cadastrado" class="form-control mb-2" required>
            <input type="text" name="name" placeholder="Novo nome" class="form-control mb-2" required>
            <input type="password" name="password" placeholder="Nova senha" class="form-control mb-2" required>
            <button class="btn btn-red mt-2">Editar</button>
        </form>

        <p class="text-center mt-2"><a href="{{ route('login') }}">Voltar ao login</a></p>
    </div>
</div>
</body>
</html>
