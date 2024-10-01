<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Detalhes do Professor</title>
</head>
<body>
    <div>
        <label for="nome">Nome:</label>
        <input type="text" id="nome" name="nome" value="{{ $teacher->nome }}" readonly>
    </div>
    <div>
        <label for="email">Email:</label>
        <input type="email" id="email" name="email" value="{{ $teacher->email }}" readonly>
    </div>
</body>
</html>