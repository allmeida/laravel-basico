<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Novo Contato</title>
    <link rel="stylesheet" href="/css/app.css">
</head>
<body>
<div class="container">
    <br>
    <h1>Novo Contato</h1>

        <form action="/contatos" method="post">
            @csrf
            <div class="form-group">
                <label for="nome">Nome</label>
                <input class="form-control" type="text" name="nome" >
            </div>
            <div class="form-group">
                <label for="nome">Telefone</label>
                <input class="form-control" type="text" name="telefone" >
            </div>
            <button class="btn btn-primary" type="submit">Cadastrar</button>
        </form>
</div>
</body>
</html>
