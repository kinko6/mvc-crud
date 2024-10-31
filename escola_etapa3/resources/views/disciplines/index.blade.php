<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Disciplinas</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
</head>
<body>
    <div class="container">
        <h1>Disciplinas</h1>
        <a href="{{ route('disciplines.create') }}" class="btn btn-primary">Adicionar Disciplina</a>

        <table class="table">
            <thead>
                <tr>
                    <th>ID</th>
                    <th>Nome</th>
                    <th>Descrição</th>
                    <th>Ações</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($disciplines as $discipline)
                <tr>
                    <td>{{ $discipline->id }}</td>
                    <td>{{ $discipline->name }}</td>
                    <td>{{ $discipline->description }}</td>
                    <td>
                        <a href="{{ route('disciplines.edit', $discipline->id) }}" class="btn btn-warning">Editar</a>
                        <form action="{{ route('disciplines.destroy', $discipline->id) }}" method="POST" style="display:inline;">
                            @csrf
                            @method('DELETE')
                            <button type="submit" class="btn btn-danger">Deletar</button>
                        </form>
                    </td>
                </tr>
                @endforeach
            </tbody>
        </table>
        <a href="{{ url('/') }}" class="btn btn-secondary">Voltar para a Página Inicial</a>
    </div>
</body>
</html>
