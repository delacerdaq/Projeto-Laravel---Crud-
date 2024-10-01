<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Editar Professor</title>
</head>
<body>
    <form action="{{ route('alterar_professor', ['id' => $teacher->id]) }}" method="POST">
        @csrf
        <div>
            <label for="nome">Nome:</label>
            <input type="text" id="nome" name="nome" value="{{ $teacher->nome }}" required>
        </div>
        <div>
            <label for="email">Email:</label>
            <input type="email" id="email" name="email" value="{{ $teacher->email }}" required>
        </div>
        <button type="submit">Atualizar</button>
    </form>
</body>
</html>