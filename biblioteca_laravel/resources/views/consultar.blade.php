<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Laravel - Listagem</title>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11.5.6/dist/sweetalert2.all.min.js"></script>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;600&display=swap" rel="stylesheet">

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
            font-weight: 600;
            font-family: 'Poppins', sans-serif;
            font-size: 16px;
        }

        .navbar-nav .nav-link:hover {
            color: #0b0107 !important;
            text-decoration: underline;
        }

        .container {
            margin: 30px auto;
            display: flex;
            justify-content: center;
            padding: 10px;
        }

        .form-container {
            background-color: rgb(255, 244, 253);
            padding: 40px;
            border-radius: 10px;
            box-shadow: 0 4px 6px rgba(0, 0, 0, 0.1);
            width: 100%;
            max-width: 1200px;
            margin: 0 auto;
        }

        .header-text {
            font-size: 24px;
            color: #333;
            font-weight: bold;
        }

        .sub-header {
            font-size: 18px;
            color: #666;
            margin-bottom: 30px;
        }

        .table th {
            background-color: #f0d4f3;
            color: #333;
            font-weight: 600;
            text-transform: uppercase;
        }

        .btn-sm img {
            vertical-align: middle;
        }

        .btn-danger,
        .btn-success {
            border-radius: 8px;
            padding: 6px 10px;
        }
    </style>
</head>

<body>
    <!-- Navbar -->
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
                        <a class="nav-link active" href="/">CADASTRAR</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="/listar-usuarios">CONSULTAR</a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>

    <!-- Conteúdo Principal -->
    <div class="container">
        <div class="form-container">
            <p class="header-text">LISTAGEM - Clientes Cadastrados</p>
            <p class="sub-header">Visualize abaixo todos os agendamentos registrados no sistema</p>

            <table class="table table-striped">
                <thead>
                    <tr>
                        <th>NOME</th>
                        <th>TELEFONE</th>
                        <th>ORIGEM</th>
                        <th>DATA</th>
                        <th>OBSERVAÇÃO</th>
                        <th>EDITAR</th>
                        <th>EXCLUIR</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($produtos as $usuario)
                        <tr>
                            <td>{{ $usuario->nome }}</td>
                            <td>{{ $usuario->telefone }}</td>
                            <td>{{ $usuario->origem }}</td>
                            <td>{{ $usuario->data }}</td>
                            <td>{{ $usuario->observacao }}</td>
                            <td>
                                <a href="/editar-usuario/{{ $usuario->id }}" class="btn btn-success btn-sm">
                                    <img src="{{ asset('imagens/editar-texto.png') }}" alt="Editar" width="27" height="25">
                                </a>
                            </td>
                            <td>

                                <form action="/excluir-usuario/{{ $usuario->id }}" method="POST">
                                    @csrf 
                                    @method('DELETE')
                                    <a href = "/listar-usuarios">
                                    <button type="submit" class="btn btn-danger btn-sm">
                                        <img src="{{ asset('imagens/excluir.png') }}" alt="Excluir" width="26" height="26">
                                    </button>
                                    </a>
                                </form>
                            </td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>

    <!-- Scripts -->
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.min.js"></script>

    
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.min.js" crossorigin="anonymous"></script>
</body>
</html>


