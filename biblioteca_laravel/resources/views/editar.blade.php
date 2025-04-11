<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Laravel - Editar</title>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11.5.6/dist/sweetalert2.all.min.js"></script>

    <style>
        body {
            background-color: rgb(234, 141, 234);
            font-family: 'Arial', sans-serif;
        }

        .navbar {
            background-color: rgb(253, 253, 253);
            box-shadow: 0 4px 6px rgba(0, 0, 0, 0.1);
        }

        .navbar-brand {
            font-family: 'Poppins', sans-serif;
            font-weight: 600;
            font-size: 24px;
            color: #111;
        }

        .navbar-nav .nav-link {
            color: black !important;
            font-weight: bold;
        }

        .navbar-nav .nav-link:hover {
            color: #0b0107 !important;
            text-decoration: underline;
        }

        .container {
            margin: 30px auto;
            display: flex;
            align-items: center;
            justify-content: center;
            padding: 10px;
        }

        .form-container {
            background-color: rgb(255, 244, 253);
            padding: 40px;
            border-radius: 10px;
            box-shadow: 0 4px 6px rgba(0, 0, 0, 0.1);
            width: 90%;
            max-width: 700px;
        }

        .form-control,
        .form-select,
        .form-select-sm,
        textarea {
            border-radius: 10px;
            box-shadow: 0 4px 6px rgba(0, 0, 0, 0.1);
            margin-bottom: 15px;
        }

        .btn1 {
            display: flex;
            justify-content: center;
            width: 100%;
            margin-top: 20px;
        }

        .btn-primary {
            background-color: #c002c0;
            border-color: #c002c0;
            border-radius: 10px;
            padding: 12px 30px;
            font-size: 16px;
            font-weight: bold;
            color: white;
            text-transform: uppercase;
            transition: background-color 0.3s, transform 0.3s;
        }

        .btn-primary:hover {
            background-color: #9b029b;
            border-color: #9b029b;
            transform: translateY(-3px);
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

        .img-container {
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100px;
        }

        .cadastrar {
            text-align: center;
            font-size: 34px;
            font-weight: bold;
            color: #c002c0;
            text-transform: uppercase;
            margin: 5px 0;
            font-family: 'Arial', sans-serif;
            letter-spacing: 1px;
            text-shadow: 1px 1px 3px rgba(0, 0, 0, 0.1);
        }

        .p {
            text-align: center;
        }
    </style>
</head>
<body>

    <nav class="navbar navbar-expand-lg">
        <div class="container-fluid">
            <img src="{{ asset('imagens/adicionar-usuario.png') }}" alt="Logo" width="30" height="30">
            <a class="navbar-brand" href="#">SISTEMA WEB</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent">
                <span class="navbar-toggler-icon"></span>
            </button>

            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                    <li class="nav-item">
                        <a class="nav-link" href="/" style="color: white;">CADASTRAR</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link active" href="/listar-usuarios" style="color: white;">CONSULTAR</a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>

    <div class="container">
        <div class="form-container">

            <div class="cadastrar">
                <p class="header-text">EDITAR</p>
            </div>

            <div class="img-container">
                <img src="{{ asset('imagens/adicionar-usuario.png') }}" alt="Editar Imagem" width="100" height="100">
            </div>

            <br>

            <div class="p">
                <p class="header-text">Agendamento de Potenciais Clientes</p>
                <p class="sub-header">Sistema Utilizado para agendamentos de serviços</p>
            </div>

            <form action="{{ url('/editar-usuario/'.$produto->id) }}" method="POST">
                @csrf

                <div class="mb-3">
                    <label for="nome" class="form-label">Nome:</label>
                    <input type="text" name="nome" class="form-control" id="nome" value="{{ $produto->nome }}" required>
                </div>

                <div class="row">
                    <div class="col-md-6">
                        <div class="mb-3">
                            <label for="telefone" class="form-label">Telefone:</label>
                            <input type="text" name="telefone" class="form-control" id="telefone" maxlength="11" value="{{ $produto->telefone }}" required>
                        </div>
                    </div>

                    <div class="col-md-6">
                        <div class="mb-3">
                            <label for="origem" class="form-label">Origem:</label>
                            <select class="form-select form-select-sm" name="origem" id="origem" required>
                                <option value="1" {{ $produto->origem == 1 ? 'selected' : '' }}>Celular</option>
                                <option value="2" {{ $produto->origem == 2 ? 'selected' : '' }}>Notebook</option>
                                <option value="3" {{ $produto->origem == 3 ? 'selected' : '' }}>Tablet</option>
                            </select>
                        </div>
                    </div>
                </div>

                <div class="mb-3">
                    <label for="data" class="form-label">Data de Contato:</label>
                    <input type="date" name="data" class="form-control" id="data" value="{{ $produto->data }}" required>
                </div>

                <div class="mb-3">
                    <label for="observacao" class="form-label">Observação:</label>
                    <textarea class="form-control" name="observacao" id="observacao" rows="3">{{ $produto->observacao }}</textarea>
                </div>

                <div class="btn1">
                    <button type="submit" class="btn btn-primary">ATUALIZAR</button>
                </div>
            </form>

        </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.min.js"></script>

</body>
</html>
