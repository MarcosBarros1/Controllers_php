<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cadastro de produtos</title>
</head>

<body>
    <h1>Cadastrar produto</h1>

    <form action="/produtos" method="POST">
        @csrf
        <input type="text" name="nome">
        <button>Cadastrar Produto</button>
    </form>
</body>

</html>