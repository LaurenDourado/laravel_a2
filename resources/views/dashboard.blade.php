<!DOCTYPE html>
<html>
<head>
    <title>Dashboard</title>
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
            color: white;
            text-align: center;
        }
        .btn-red {
            background-color: #FF5C8D;
            color: white;
            border-radius: 20px;
            margin: 5px;
        }
        .btn-red:hover { background-color: #FF2E63; }
    </style>
</head>
<body>
<div class="bg-wave">
    <div>
        <h2>Estou Logado!</h2>
        <a href="{{ route('users.index') }}" class="btn btn-red">Usuários</a>
        <a href="{{ route('home') }}" class="btn btn-red">Sair</a>
    </div>
</div>
</body>
</html>
