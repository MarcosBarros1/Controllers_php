<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Disciplinas</title>
</head>

<body>
    <h1>Disciplinas cadastrados</h1>
    <ul>
        @foreach($disciplinas as $disciplina)
            <li>{{ $disciplina }}</li>
        @endforeach
    </ul>
</body>

</html>