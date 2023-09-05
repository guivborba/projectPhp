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
    
    <?php require_once $_SERVER['DOCUMENT_ROOT'] . '/' . FOLDER . '/view/navbar.php'; ?>
   
    <header class="bg-primary text-white py-4">
        <div class="container text-center">
            <h2>Semana da Acessibilidade</h2>
        </div>
    </header>

    <div class="container-fluid text-center w-25 p-1">
    <img src="/<?php echo FOLDER; ?>/style/logo.png" class="rounded mx-auto d-block img-fluid mt-5" alt="Logotipo da Universidade Ulbra - Universidade Luterana do Brasil">
    </div>

    <div class="container mt-2 text-center">
        <h2>Professores - Ulbra Torres</h2>
    </div>

    <div class="container mt-2 text-center">
        <a href="/<?php echo FOLDER; ?>/?controller=Professor&acao=salvar"class="btn btn-success">Cadastrar Professor</a>
    </div>

    <table class="container mt-2 table table-striped p-5">
        <thead>
            <tr>
                <th scope="col">#</th>
                <th scope="col">Nome</th>
                <th scope="col">Idade</th>
                <th scope="col">Ações</th>
            </tr>
        </thead>

        <tbody>
            <?php foreach ($professores as $professor) { ?>
                <tr>
                    <td><?php echo $professor["id"]; ?></td>
                    <td><?php echo $professor["nome"]; ?></td>
                    <td><?php echo $professor["idade"]; ?></td>
                    <td>
                        <a href="/<?php echo FOLDER; ?>?controller=Professor&acao=editar&id=<?php echo $professor ['id']; ?>" class="btn btn-primary">Editar</a>
                        <a href="/<?php echo FOLDER; ?>?controller=Professor&acao=excluir&id=<?php echo $professor ['id']; ?>" class="btn btn-primary">Excluir</a>
                    </td>
                </tr>
            <?php } ?>
        </tbody>  
    </table>

</body>
</html>
