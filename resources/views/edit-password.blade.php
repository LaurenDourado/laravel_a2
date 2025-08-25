<!DOCTYPE html>
<html>
<head>
    <title>Editar Senha</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
    <style>
        body, html { height: 100%; margin:0; }
        .bg-wave {
            background: linear-gradient(160deg, #FF5C8D, #FF8CA1);
            height: 100%;
            display: flex;
            justify-content: center;
            align-items: center;
            font-family: 'Arial', sans-serif;
        }
        .card-edit {
            background: white;
            border-radius: 25px;
            padding: 30px;
            width: 320px;
            box-shadow: 0px 10px 25px rgba(0,0,0,0.2);
        }
        .btn-red { background-color: #FF5C8D; color: white; border-radius: 20px; width:100%; }
        .btn-red:hover { background-color: #FF2E63; }
    </style>
</head>
<body>
<div class="bg-wave">
    <div class="card-edit">
        <h3 class="text-center mb-3">Editar</h3>
        @if(session('success'))
            <div class="alert alert-success">{{ session('success') }}</div>
        @endif
        <form method="POST" action="{{ route('edit.password') }}">
            @csrf
            <input type="text" name="name" placeholder="Nome completo" value="{{ $user->name }}" class="form-control mb-2" required>
            <input type="email" name="email" placeholder="Email" value="{{ $user->email }}" class="form-control mb-2" required>
            <input type="password" name="password" placeholder="Nova senha" class="form-control mb-2" required>
            <button class="btn btn-red mt-2">Editar</button>
        </form>
    </div>
</div>
</body>
</html>
