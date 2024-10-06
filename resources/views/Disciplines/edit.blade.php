<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Editar Disciplina</title>
</head>
<body>
    <form action="{{ route('alterar_disciplina', ['id' => $discipline->id]) }}" method="POST">
        @csrf
        <div>
            <label for="nome">Nome da Disciplina:</label>
            <input type="text" id="nome" name="nome" value="{{ $discipline->nome }}" required>
        </div>
        <div>
            <label for="teacher_id">ID do Professor:</label>
            <input type="text" id="teacher_id" name="teacher_id" value="{{ $discipline->teacher_id }}" required>
        </div>
        <button type="submit">Atualizar</button>
    </form>
</body>
</html>