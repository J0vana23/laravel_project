<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
       <!-- SweetAlert2 CDN -->
<script src="https://cdn.jsdelivr.net/npm/sweetalert2@11.5.6/dist/sweetalert2.all.min.js"></script>

        <title>Laravel</title>
        <style>
               /* Custom CSS */
               body {
                background-color:rgb(234, 141, 234);
                font-family: 'Arial', sans-serif;
            }

            .navbar {
                background-color:rgb(253, 253, 253);
                border-radius: 0;
                box-shadow: 0 4px 6px rgba(0, 0, 0, 0.1);
            }
            .navbar-brand {
    font-family: 'Poppins', sans-serif;
    font-weight: 600; /* Puedes usar 400 para normal, 600 o 700 para más negrita */
    font-size: 24px;  /* Ajusta según necesites */
    color: #111;      /* Puedes cambiar el color también */
}
            .navbar-nav .nav-link {
                color: rgb(0, 0, 0) !important;
                font-weight: bold;
            }
            .navbar-nav .nav-link:hover {
                color:rgb(11, 1, 7) !important;
                text-decoration: underline;
            }
            .container {
            margin: 30px auto; /* Centraliza e dá espaço acima/abaixo */
            display: flex;
            align-items: center;
            justify-content: center;
            padding: 10px; /* Aumenta o espaçamento interno */
            
            }

            .form-control, .form-select,  .form-select-sm, textarea {
                border-radius: 10px;
                box-shadow: 0 4px 6px rgba(0, 0, 0, 0.1);
                margin-bottom: 15px;
            }

            .btn1 {
            display: flex;
            justify-content: center; /* Centraliza o botão horizontalmente */
            width: 100%; /* Garantir que ocupe toda a largura do formulário */
            margin-top: 20px; /* Espaço acima do botão */
            }

            .btn-primary {
    background-color: #c002c0; /* Cor de fundo */
    border-color: #c002c0; /* Cor da borda */
    border-radius: 10px; /* Bordas arredondadas */
    padding: 12px 30px; /* Tamanho confortável */
    font-size: 16px; /* Tamanho de fonte adequado */
    font-weight: bold; /* Texto em negrito */
    color: white; /* Cor do texto */
    text-transform: uppercase; /* Texto em maiúsculas */
    transition: background-color 0.3s, transform 0.3s; /* Transição suave */
}

.btn-primary:hover {
    background-color: #9b029b; /* Cor de fundo no hover */
    border-color: #9b029b; /* Cor da borda no hover */
    transform: translateY(-3px); /* Leve elevação ao passar o mouse */
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
                background-color: rgb(255, 244, 253); /* Cor de fundo */
    padding: 40px; /* Aumentando o espaçamento interno para dar mais espaço */
    border-radius: 10px; /* Borda arredondada */
    box-shadow: 0 4px 6px rgba(0, 0, 0, 0.1); /* Sombra suave */
    width: 90%; /* Aumenta a largura do card */
    max-width: 700px; /* Define um limite máximo de largura */
    margin: 0 auto; /* Centraliza o card horizontalmente */
    height: auto; /* Altura automática para ajustar conforme o conteúdo */

            }
            .form-select {
            height: 39px;
            background-color: #fff; /* Fundo branco para o select */
        }
        
        .img-container {
        display: flex;
        justify-content: center; /* Centraliza horizontalmente */
        align-items: center; /* Centraliza verticalmente (caso necessário) */
        height: 100px; /* Define uma altura para a div, se necessário */
    }

    .cadastrar{
        text-align: center;
        font-size: 34px; /* Tamanho menor */
        font-weight: bold; /* Deixa o texto em negrito */
        color: #c002c0; /* Cor vibrante */
        text-transform: uppercase; /* Deixa o texto em maiúsculas */
        margin: 5px 0; /* Espaço acima e abaixo */
        font-family: 'Arial', sans-serif; /* Fonte simples e moderna */
        letter-spacing: 1px; /* Espaçamento sutil entre as letras */
        text-shadow: 1px 1px 3px rgba(0, 0, 0, 0.1); /* Sombra suave no texto */
    }

    .p{
        text-align: center; 
    }



        </style>
    </head>

    <body>
        <!-- Navbar -->
        <nav class="navbar navbar-expand-lg">
            <div class="container-fluid">
                
            <img src="{{ asset('imagens/adicionar-usuario.png') }}" alt="Minha Imagem" width ="30px" heigth = "30px">

                <a class="navbar-brand" href="">
                SISTEMA WEB
                </a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                        <li class="nav-item">
                            <a class="nav-link active" aria-current="page" href="/" style="color: white;">CADASTRAR</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="/listar-usuarios/" style="color: white;">CONSULTAR</a>
                        </li>
                    
                    </ul>
                </div>
            </div>
        </nav>

        <!-- Main Content -->
        <div class="container">
            <div class="form-container">

            <div class="cadastrar">
                <p class="header-text">CADASTRAR </p>
            </div>
        
        <div class="img-container">
            <img src="{{ asset('imagens/adicionar-usuario.png') }}" alt="Minha Imagem" width="100px" height="100px">
        </div>
</br>

<div class= "p">
                <p class="header-text">Agendamento de Potenciais Clientes</p>

                <p class="sub-header">Sistema Utilizado para agendamentos de serviços</p>
</div>
                <!-- Formulário -->
                <form action="{{url('/cadastrar-usuario')}}" method="POST">
                    @csrf
                    <div class="mb-3">
                        <label for="nome" class="form-label">Nome:</label>
                        <input type="text" name="nome" class="form-control" id="nome" required>
                    </div>

                    <div class="row"> <!-- Linha que irá conter as duas colunas -->
        <div class="col-md-6"> <!-- Coluna para o Telefone -->
            <div class="mb-3">
                <label for="telefone" class="form-label">Telefone:</label>
                <input type="string" name="telefone" class="form-control" id="telefone" maxlength="11" required>
            </div>
        </div>
        
        <div class="col-md-6"> <!-- Coluna para a Origem -->
            <div class="mb-3">
                <label for="origem" class="form-label">Origem:</label>
                <select class="form-select form-select-sm" name="origem" id="origem" required>
                    <option value="1">Celular</option>
                    <option value="2">Notebook</option>
                    <option value="3">Tablet</option>
                </select>
            </div>
        </div>
    </div>
                    <div class="mb-3">
                        <label for="data" class="form-label">Data de Contato:</label>
                        <input type="date" name="data" class="form-control" id="data" required>
                    </div>

                    <div class="mb-3">
                        <label for="observacao" class="form-label">Observação:</label>
                        <textarea class="form-control" name="observacao" id="observacao" rows="3"></textarea>
                    </div>

                    <div class="btn1">
                    <button type="submit" name="botao" class="btn btn-primary">REGISTRAR!</button>
                    </div>

                </form>
            </div>
        </div>


        <!-- Scripts -->
        <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js" integrity="sha384-I7E8VVD/ismYTF4hNIPjVp/Zjvgyol6VFvRkX/vR+Vc4jQkC+hVqc2pM8ODewa9r" crossorigin="anonymous"></script>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.min.js" integrity="sha384-0pUGZvbkm6XF6gxjEnlmuGrJXVbNuzT9qBBavbLwCsOGabYfZo0T0to5eqruptLy" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11.5.6/dist/sweetalert2.all.min.js"></script>

    <script>
    document.addEventListener('DOMContentLoaded', function () {
        const form = document.querySelector('form');
        
        // Evento de submit do formulário
        form.addEventListener('submit', function (e) {
            e.preventDefault(); // Impede o envio imediato do formulário
            
            const nome = document.getElementById('nome').value.trim();
            const telefone = document.getElementById('telefone').value.trim();
            const origem = document.getElementById('origem').value;
            const data = document.getElementById('data').value;
            const observacao = document.getElementById('observacao').value;


            if (!nome || !telefone || !origem || !data || !observacao) {
                showAlert('warning', 'Preencha todos os campos obrigatórios!');
                return;
            }

            // Se tudo estiver preenchido, mostra o alerta de sucesso
            showAlert('success', 'Cadastrado com sucesso!');
        });
        
        // Função para exibir o alerta
        function showAlert(type, message) {
            // Criação do modal
            const alertModal = document.createElement('div');
            alertModal.classList.add('custom-alert', type);

            // Adicionando o conteúdo do alerta
            alertModal.innerHTML = `
                <div class="alert-container">
                    <div class="alert-icon-container">
                        <img src="{{ asset('imagens/adicionar-usuario.png') }}" alt="Usuário" class="alert-icon">
                    </div>
                    <span class="alert-message">${message}</span>
                    
                    <button class="alert-btn">OK</button>
                    
                </div>
            `;
            
            // Adiciona o alerta na tela
            document.body.appendChild(alertModal);

            // Ação do botão OK
            const btn = alertModal.querySelector('.alert-btn');
            btn.addEventListener('click', function () {
                alertModal.remove(); // Remove o alerta da tela
                if (type === 'success') {
                    form.submit(); // Envia o formulário
                }
            });
        }
    });
</script>

<style>
    /* Estilos para o Alerta */
    .custom-alert {
        position: fixed;
        top: 0;
        left: 0;
        right: 0;
        bottom: 0;
        background: rgba(0, 0, 0, 0.6);
        display: flex;
        justify-content: center;
        align-items: center;
        z-index: 1000;
    }

    .alert-container {
        background-color: #fff;
        padding: 30px;
        border-radius: 15px;
        box-shadow: 0 4px 20px rgba(0, 0, 0, 0.3);
        display: flex;
        flex-direction: column;
        align-items: center;
        text-align: center;
        width: 80%;
        max-width: 400px;
    }

    .alert-icon-container {
        margin-bottom: 20px;
    }

    .alert-icon {
        width: 80px;
        height: 80px;
        border-radius: 50%;
        border: 3px solid #c002c0;
        object-fit: cover;
        margin-bottom: 10px;
    }

    .alert-message {
        font-size: 22px;
        color: #333;
        margin-bottom: 25px;
        font-weight: 500;
    }

    .alert-btn {
        background-color: #c002c0;
        color: white;
        border: none;
        padding: 12px 25px;
        border-radius: 8px;
        cursor: pointer;
        font-size: 18px;
        transition: background-color 0.3s, transform 0.2s;
    }

    .alert-btn:hover {
        background-color: #9b029b;
        transform: scale(1.05);
    }

    /* Estilo para o alerta de sucesso */
    .custom-alert.success {
        background-color: rgba(0, 255, 0, 0.1);
    }

    /* Estilo para o alerta de aviso */
    .custom-alert.warning {
        background-color: rgba(255, 255, 0, 0.1);
    }
</style>

        </body>
</html>


