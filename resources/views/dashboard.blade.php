<!DOCTYPE html>
<html>
<head>
    <title>Dashboard</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
    <style>
        body, html { height: 100%; margin:0; }
        .bg-wave { background: linear-gradient(160deg,#FF5C8D,#FF8CA1); height:100%; display:flex; justify-content:center; align-items:center; flex-direction:column; color:white; font-family:Arial,sans-serif; text-align:center; }
        .btn-red { background-color:#FF5C8D; color:white; border-radius:20px; padding:10px 20px; font-weight:bold; margin-top:20px; text-decoration:none; }
        .btn-red:hover { background-color:#FF2E63; color:white; }
    </style>
</head>
<body>
<div class="bg-wave">
    <h2>Estou Logado, {{ optional(session('user'))->name }}!</h2>
    <a href="{{ route('logout') }}" class="btn-red">Sair</a>
</div>
</body>
</html>
