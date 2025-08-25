<!DOCTYPE html>
<html>
<head>
    <title>Middleware</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
    <style>
        body, html { height: 100%; margin:0; font-family: Arial, sans-serif; }
        .bg-wave { background: linear-gradient(160deg,#FF5C8D,#FF8CA1); height:100vh; display:flex; justify-content:center; align-items:center; color:white; flex-direction:column; text-align:center; }
        .btn-red { background-color:#FF5C8D; color:white; border-radius:20px; padding:10px 20px; margin-top:20px; text-decoration:none; }
        .btn-red:hover { background-color:#FF2E63; color:white; }
    </style>
</head>
<body>
<div class="bg-wave">
    <h2>Página Middleware</h2>
    <p>Protegida por middleware quando a rota estiver no grupo protegido.</p>
    <a href="{{ route('dashboard') }}" class="btn-red">Voltar</a>
</div>
</body>
</html>
