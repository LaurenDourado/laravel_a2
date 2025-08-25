<!DOCTYPE html>
<html>
<head>
    <title>Home</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
    <style>
        body, html { height: 100%; margin:0; }
        .bg-wave {
            background: linear-gradient(160deg, #FF5C8D, #FF8CA1);
            height: 100%;
            display: flex;
            justify-content: center;
            align-items: center;
            flex-direction: column;
            color: white;
            font-family: 'Arial', sans-serif;
            text-align: center;
        }
        .btn-custom {
            border-radius: 25px;
            width: 120px;
            margin: 10px;
            border: 2px solid white;
            color: white;
        }
        .btn-custom:hover { background-color: white; color: #FF5C8D; }
    </style>
</head>
<body>
<div class="bg-wave">
    <h1>Bem-vinda!</h1>
    <p>Entre ou cadastre-se para começar</p>
    <div>
        <a href="{{ route('login') }}" class="btn btn-custom">Entrar</a>
        <a href="{{ route('register') }}" class="btn btn-custom">Cadastrar</a>
    </div>
</div>
</body>
</html>
