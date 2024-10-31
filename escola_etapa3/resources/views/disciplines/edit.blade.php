<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Editar Disciplina</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
</head>
<body>
    <div class="container">
        <h1>Editar Disciplina</h1>
        <form action="{{ route('disciplines.update', $discipline->id) }}" method="POST">
            @csrf
            @method('PUT')
            <div class="form-group">
                <label for="name">Nome</label>
                <input type="text" class="form-control" id="name" name="name" value="{{ $discipline->name }}" required>
            </div>
            <div class="form-group">
                <label for="description">Descrição</label>
                <textarea class="form-control" id="description" name="description" required>{{ $discipline->description }}</textarea>
            </div>
            <button type="submit" class="btn btn-success">Atualizar</button>
            <a href="{{ route('disciplines.index') }}" class="btn btn-secondary">Voltar</a>
        </form>
    </div>
</body>
</html>
