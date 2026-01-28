<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cadastrar Aluno</title>
</head>
<body>
    <h1>Novo Aluno</h1>

    <form action="{{ route('alunos.store') }}" method="POST">
        @csrf

        <label>Nome:</label>
        <input type="text" name="nome" placeholder="Nome do aluno">

        <button type="submit">Salvar Aluno</button>
    </form>
</body>
</html>