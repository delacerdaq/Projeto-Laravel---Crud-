<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Detalhes da Disciplina</title>
</head>
<body>
    <div>
        <label for="nome">Nome da Disciplina:</label>
        <input type="text" id="nome" name="nome" value="{{ $discipline->nome }}" readonly>
    </div>
    <div>
        <label for="teacher_id">ID do Professor:</label>
        <input type="text" id="teacher_id" name="teacher_id" value="{{ $discipline->teacher_id }}" readonly>
    </div>
</body>
</html>