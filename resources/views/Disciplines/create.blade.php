<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cadastrar Disciplina</title>
</head>
<body>

    <form action="{{ route('registrar_disciplina') }}" method="POST">
        @csrf
        <div>
            <label for="nome">Nome da Disciplina:</label>
            <input type="text" id="nome" name="nome" required>
        </div>
        <div>
            <label for="teacher_id">Professor:</label>
            <select id="teacher_id" name="teacher_id" required>
                <option value="">Selecione um professor</option>
                @foreach($teachers as $teacher)
                    <option value="{{ $teacher->id }}">{{ $teacher->nome }}</option>
                @endforeach
            </select>
        </div>
        <button type="submit">Cadastrar Disciplina</button>
    </form>

</body>
</html>