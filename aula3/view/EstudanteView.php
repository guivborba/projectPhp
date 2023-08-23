<?php $listaEstudantes = $_REQUEST["estudantes"]; ?>

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
    <title>Estudantes</title>
</head>
<body>
<header class="bg-primary text-white py-4">
    <div class="container text-center">
        <h2>Semana da Acessibilidade</h2>
    </div>
</header>

    <div class="container-fluid text-center w-25 p-1">
    <img src="/aula3/style/logo.png" class="rounded mx-auto d-block img-fluid mt-5" alt="Logotipo da Universidade Ulbra - Universidade Luterana do Brasil">
    </div>

    <div class="container mt-2 text-center">
        <h2>Estudantes - Ulbra Torres</h2>
    </div>


    <table class="container mt-2 table table-striped p-5">
    <thead>
            <tr>
                <th scope="col">Nome</th>
                <th scope="col">Idade</th>
            </tr>
        </thead>
        <?php foreach ($listaEstudantes as $estudante) { ?>
        <tbody>
            <tr>
                    <td>
                        <?php echo $estudante["nome"]; ?>
                    </td>
                    <td>
                        <?php echo $estudante["idade"]; ?>
                    </td>
            </tr>
            <?php } ?>
        </tbody>  
    </table>


</body>
</html>
