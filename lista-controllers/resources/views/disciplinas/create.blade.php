<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cadastrar Disciplina</title>
</head>
<body>
    <h1>Nova Disciplina</h1>

    <form action="/disciplinas/store" method="POST">
        @csrf

        <label>Nome do Curso:</label>
        <input type="text" name="nome" placeholder="Digite o nome">

        <button type="submit">Salvar</button>
    </form>
</body>
</html>