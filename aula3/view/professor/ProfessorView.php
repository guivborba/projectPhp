<?php $professores = $_REQUEST["professores"]; ?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- Latest compiled and minified CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/css/bootstrap.min.css" rel="stylesheet">

    <!-- Latest compiled JavaScript -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/js/bootstrap.bundle.min.js"></script>
    <title>Lista de Professores</title>
</head>
<body>
    <nav class="navbar bg-dark border-bottom border-body navbar-expand-lg bg-body-tertiary" data-bs-theme="dark">
        <div class="container-fluid">
            <a class="navbar-brand" href="#">Meu site</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                <li class="nav-item">
                    <a class="nav-link active" aria-current="page" href="/<?php echo FOLDER; ?>">Home</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="/<?php echo FOLDER; ?>/?controller=Estudante&acao=listar">Alunos</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="/<?php echo FOLDER; ?>/?controller=Professor&acao=listar"">Professores</a>
                </li>
                </ul>
                <form class="d-flex" role="search">
                <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
                <button class="btn btn-outline-success" type="submit">Search</button>
                </form>
            </div>
        </div>
    </nav>
    <header class="bg-primary text-white py-4">
        <div class="container text-center">
            <h2>Semana da Acessibilidade</h2>
        </div>
    </header>

    <div class="container-fluid text-center w-25 p-1">
    <img src="/aula3/style/logo.png" class="rounded mx-auto d-block img-fluid mt-5" alt="Logotipo da Universidade Ulbra - Universidade Luterana do Brasil">
    </div>

    <div class="container mt-2 text-center">
        <h2>Professores - Ulbra Torres</h2>
    </div>

    <div class="container mt-2 text-center">
        <a href="/aula3/?controller=Professor&acao=salvar"class="btn btn-success">Cadastrar Professor</a>
    </div>

    <table class="container mt-2 table table-striped p-5">
        <thead>
            <tr>
                <th scope="col">Nome</th>
                <th scope="col">Idade</th>
            </tr>
        </thead>

        <tbody>
            <?php foreach ($professores as $professor) { ?>
                <tr>
                    <td><?php echo $professor["nome"]; ?></td>
                    <td><?php echo $professor["idade"]; ?></td>
                </tr>
            <?php } ?>
        </tbody>  
    </table>

</body>
</html>
