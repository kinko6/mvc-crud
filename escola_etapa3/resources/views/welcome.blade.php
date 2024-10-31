<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Página Inicial</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
</head>
<body>
    <div class="container">
        <h1>Página Inicial</h1>
        <p>Bem-vindo ao sistema de gestão escolar!</p>
        <div class="list-group">
            <a href="{{ route('teachers.index') }}" class="list-group-item list-group-item-action">Gerenciar Professores</a>
            <a href="{{ route('disciplines.index') }}" class="list-group-item list-group-item-action">Gerenciar Disciplinas</a>
        </div>
    </div>
</body>
</html>
