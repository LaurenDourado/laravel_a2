<!DOCTYPE html>
<html>
<head>
    <title>Detalhes do Usuário</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
    <style>
        body, html { margin:0; font-family: Arial, sans-serif; }
        .bg-wave { background: linear-gradient(160deg, #FF5C8D, #FF8CA1); height:100vh; display:flex; justify-content:center; align-items:center; }
        .card-details { background:white; border-radius:25px; padding:30px; width:350px; box-shadow:0 10px 25px rgba(0,0,0,.2); text-align:center; }
        .btn-red { background-color:#FF5C8D; color:white; border-radius:20px; width:100%; margin-top:10px; }
        .btn-red:hover { background-color:#FF2E63; }
        a { color:#FF5C8D; text-decoration:none; display:block; margin-top:10px; }
    </style>
</head>
<body>
<div class="bg-wave">
    <div class="card-details">
        <h3>{{ $user->name }}</h3>
        <p><strong>Email:</strong> {{ $user->email }}</p>
        <a href="{{ route('users.index') }}" class="btn btn-red">Voltar</a>
    </div>
</div>
</body>
</html>
