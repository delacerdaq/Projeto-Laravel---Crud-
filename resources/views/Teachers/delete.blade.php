<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Excluir Professor</title>
</head>
<body>
    <form action="{{ route('excluir_professor', ['id' => $teacher->id]) }}" method="POST">
        @csrf
        @method('DELETE')
        <div>
            <label for="confirmacao">Tem certeza que deseja excluir este professor?</label>
        </div>
        <div>
            <input type="text" id="nome" name="nome" value="{{ $teacher->nome }}" readonly>
        </div>
        <button type="submit">Sim</button>
    </form>
</body>
</html>