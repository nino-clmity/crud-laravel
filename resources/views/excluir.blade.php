<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://fonts.bunny.net/css2?family=Nunito:wght@400;600;700&display=swap" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
    <title>Usuários</title>
</head>
<body>
<nav class="navbar navbar-expand-lg bg-primary" data-bs-theme="dark">
    <a class="navbar-brand" href="#">Sistema Web</a>    
    <br>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarNav">
      <ul class="navbar-nav">
        <li class="nav-item">
          <a class="nav-link active" aria-current="page" href="/cadastrar-usuario">Cadastrar</a>
        </li>
        <li class="nav-item">
          <a class="nav-link active" href="/listar-usuario/1">Consultar</a>
        </li>
        <li class="nav-item">
          <a class="nav-link active" href="/editar-usuario/1">Editar</a>
        </li>
        <li class="nav-item">
          <a class="nav-link disabled" href="#">Excluir</a>
        </li>
      </ul>
    </div>
</nav>
<div class='container'>
<br>
    <h1>Usuários</h1>

    <form action="/excluir-usuario/{{ $usuario->id }}" method="POST">
        @csrf
        <div class="mb-3">
            <label for="nomeInput" class="form-label">Nome:</label>
            <input type="text" class="form-control" id="nome" name="nome" value="{{ $usuario->nome }}">
        </div>
        <div class="mb-3">
            <label for="telInput" class="form-label">Telefone:</label>
            <input type="tel" class="form-control" id="telefone" name="telefone" value="{{ $usuario->telefone }}">
        </div>
        <div class="mb-3">
            <label for="origemInput" class="form-label">Origem:</label>
            <input type="" class="form-control" id="origem" name="origem" value="{{ $usuario->origem }}">
        </div>
        <div class="mb-3">
            <label for="dataInput" class="form-label">Data de Cadatro:</label>
            <input type="date" class="form-control" id="dataInput" name="data" value="{{ $usuario->data }}">
        </div>
        <div class="mb-3">
            <label for="obsInput" class="form-label">Observações:</label>
            <input type="text" class="form-control" id="disabledInput" name="observacoes" value="{{ $usuario->observacoes }}" ></textarea>
        </div>
        <button>Excluir</button>
    </form>
</body>
</div>
</html>