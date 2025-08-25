<!DOCTYPE html>
<html>
<head>
    <title>Lista de Usuários</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
    <style>
        body, html { margin:0; font-family: Arial, sans-serif; }
        .bg-wave { background: linear-gradient(160deg, #FF5C8D, #FF8CA1); min-height: 100vh; padding: 50px; color: white; }
        .card-table { background: white; border-radius: 25px; padding: 20px; color: black; }
        .btn-red { background-color: #FF5C8D; color: white; border-radius: 20px; margin: 5px; }
        .btn-red:hover { background-color: #FF2E63; }
        h2 { margin-bottom: 20px; }
        table th, table td { text-align: center; vertical-align: middle; }
    </style>
</head>
<body>
<div class="bg-wave">
    <div class="card-table">
        <h2>Lista de Usuários</h2>
        <a href="{{ route('users.create') }}" class="btn btn-red mb-3">Novo Usuário</a>

        @if(session('success'))
            <div class="alert alert-success">{{ session('success') }}</div>
        @endif

        <table class="table table-bordered">
            <thead><tr><th>ID</th><th>Nome</th><th>Email</th><th>Ações</th></tr></thead>
            <tbody>
            @foreach($users as $user)
                <tr>
                    <td>{{ $user->id }}</td>
                    <td>{{ $user->name }}</td>
                    <td>{{ $user->email }}</td>
                    <td>
                        <a href="{{ route('users.show', $user->id) }}" class="btn btn-red btn-sm">Ver</a>
                        <a href="{{ route('users.edit', $user->id) }}" class="btn btn-red btn-sm">Editar</a>
                        <form action="{{ route('users.destroy', $user->id) }}" method="POST" style="display:inline;">
                            @csrf @method('DELETE')
                            <button type="submit" class="btn btn-red btn-sm" onclick="return confirm('Deseja realmente excluir?')">Excluir</button>
                        </form>
                    </td>
                </tr>
            @endforeach
            </tbody>
        </table>

        <a href="{{ route('dashboard') }}" class="btn btn-red mt-2">Voltar</a>
    </div>
</div>
</body>
</html>
