<!DOCTYPE html>
<html lang="pt">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <title>Produtos</title>
    <style>
      <style>
            /* Custom CSS */
            body {
                background-color: #f8f9fa;
                font-family: 'Arial', sans-serif;
            }
            .navbar {
                background-color: #c002c0;
                /* Remover o border-radius para deixar a navbar reta */
                border-radius: 0;
                box-shadow: 0 4px 6px rgba(0, 0, 0, 0.1);
            }
            .navbar-brand img {
                height: 40px;
                border-radius: 0%;
            }
            .navbar-nav .nav-link {
                color: white !important;
                font-weight: bold;
            }
            .navbar-nav .nav-link:hover {
                color: #f8f9fa !important;
                text-decoration: underline;
            }
            .container {
                margin-top: 30px;
                margin-bottom: 30px;
            }
            .form-label {
                font-size: 16px;
                font-weight: bold;
            }
            .form-control, .form-select, textarea {
                border-radius: 10px;
                box-shadow: 0 4px 6px rgba(0, 0, 0, 0.1);
                margin-bottom: 15px;
            }
            .btn-primary {
                background-color: #c002c0;
                border-color: #c002c0;
                border-radius: 10px;
                padding: 10px 30px;
                font-size: 16px;
            }
            .btn-primary:hover {
                background-color: #9b029b;
                border-color: #9b029b;
            }
            .header-text {
                font-size: 24px;
                color: #333;
                font-weight: bold;
            }
            .sub-header {
                font-size: 18px;
                color: #666;
            }
            .form-container {
                background-color: white;
                padding: 30px;
                border-radius: 10px;
                box-shadow: 0 4px 6px rgba(0, 0, 0, 0.1);
            }
        
    </style>
</head>
<body>
      <!-- Navbar -->
      <nav class="navbar navbar-expand-lg">
            <div class="container-fluid">
                <a class="navbar-brand" href="#">
                    SISTEMA WEB
                </a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                        <li class="nav-item">
                            <a class="nav-link" href="/" style="color: white;">Cadastrar</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link active" href="/editar-usuario/12" style="color: white;">Editar</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="/listar-usuario/12" style="color: white;">Listar</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="/excluir-usuario/11" style="color: white;">Excluir</a>
                        </li>
                    </ul>
                </div>
            </div>
        </nav>

    <!-- Main Content -->
    <div class="container">
        <h1>Contatos</h1>

        <form action="{{url('/editar-produto')}}" method="POST">
            @csrf
            <div class="mb-3">
                <label for="nome" class="form-label">Nome:</label>
                <input type="text" name="nome" class="form-control" value="{{ $produto->nome }}" required>
            </div>

            <div class="mb-3">
                <label for="telefone" class="form-label">Telefone:</label>
                <input type="text" name="telefone" class="form-control" value="{{ $produto->telefone }}" required>
            </div>

            <div class="mb-3">
                <label for="origem" class="form-label">Origem:</label>
                <input type="text" name="origem" class="form-control" value="{{ $produto->origem }}" required>
            </div>

            <div class="mb-3">
                <label for="data" class="form-label">Data:</label>
                <input type="text" name="data" class="form-control" value="{{ $produto->data }}" required>
            </div>

            <div class="mb-3">
                <label for="observacao" class="form-label">Observação:</label>
                <input type="text" name="observacao" class="form-control" value="{{ $produto->observacao }}">
            </div>

        </form>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
