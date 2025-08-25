<!DOCTYPE html>
<html>
<head>
    <title>Usuários</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body class="p-5">
<div class="container">
    <h2>Usuários</h2>

    @if(session('success'))
        <div class="alert alert-success">{{ session('success') }}</div>
    @endif

    <a href="{{ route('users.create') }}" class="btn btn-success mb-2">Novo Usuário</a>
    <table class="table table-bordered">
        <tr>
            <th>ID</th><th>Nome</th><th>Email</th><th>Ações</th>
        </tr>
        @foreach($users as $user)
        <tr>
            <td>{{ $user->id }}</td>
            <td>{{ $user->name }}</td>
            <td>{{ $user->email }}</td>
            <td>
                <a href="{{ route('users.show',$user->id) }}" class="btn btn-info btn-sm">Detalhes</a>
                <a href="{{ route('users.edit',$user->id) }}" class="btn btn-warning btn-sm">Editar</a>
                <form action="{{ route('users.destroy',$user->id) }}" method="POST" style="display:inline-block;">
                    @csrf @method('DELETE')
                    <button class="btn btn-danger btn-sm" onclick="return confirm('Confirma exclusão?')">Excluir</button>
                </form>
            </td>
        </tr>
        @endforeach
    </table>
</div>
</body>
</html>
