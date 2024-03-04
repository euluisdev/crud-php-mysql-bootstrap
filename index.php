<!doctype html>
<html lang="pt-BR">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Cadastro</title>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"
        defer></script>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
</head>

<body style="font-family: Monaco, Consolas, 'Courier New', monospace;">
    <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
        <div class="container-fluid">
            <a class="navbar-brand" href="#">Cadastro</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav"
                aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav">
                    <li class="nav-item">
                        <a class="nav-link active" aria-current="page" href="./">Home</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="?page=novo">Novo Usuário</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="?page=listar">Listar Usuários</a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>

    <div class="container">
        <div class="row">
            <div class="col mt-5">
                <?php
                    include("config.php"); //chamando arquivo de connx com o banco 

                    $page = isset($_REQUEST["page"]) ? $_REQUEST["page"] : null; //verificação
                    switch($page){
                        case "novo":
                            include("novo-usuario.php");
                        break;
                        case "listar":
                            include("listar-usuario.php");
                        break;
                        case "salvar"; //criado mais um case para salvar o usuário
                            include("salvar-usuario.php");
                        break;    
                        case "editar"; //criado mais um case para editar
                            include("editar-usuario.php");
                        break; 
                        default:
                            echo '
                                <div class="container mt-5">
                                    <div class="row">
                                        <div class="col-md-6 offset-md-3 text-center">
                                            <h1 class="display-4 mb-4">Bem-vindo!</h1>
                                            <p class="lead">
                                            Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nullam 
                                            in nisl ut ipsum fringilla condimentum. Ut auctor libero sapien, ac convallis dui interdum et.
                                            </p>
                                            <button class="btn btn-dark btn-lg"><a href="?page=novo">Começar</a></button>
                                        </div>
                                    </div>
                                </div>                        
                            ';
                    }
                ?>
            </div>
        </div>
    </div>
</body>

</html>
