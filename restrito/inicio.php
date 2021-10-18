<?php include "../validar.php"; ?>

<!doctype html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">

    <title>Início</title>
</head>

<body>
    <div class="container">
        <br><h1>Início</h1><br>
        <div class="row">
            <div class="col-sm-6">
                <div class="card text-center">
                    <div class="card-body">
                        <h5 class="card-title">Cadastro de uma pessoa</h5>
                        <p class="card-text">Nome, endereço, telefone, E-mail, data de nascimento</p>
                        <a href="cadastro.php"><button type="button" class="btn btn-primary btn-lg">Cadastrar</button></a>
                    </div>
                </div>
            </div>
            <div class="col-sm-6">
                <div class="card text-center">
                    <div class="card-body">
                        <h5 class="card-title">Lista de cadastros</h5>
                        <p class="card-text">Listagem, editar e exluir.</p>
                        <a href="pesquisa.php"><button type="button" class="btn btn-primary btn-lg">Consultar</button></a>
                    </div>
                </div>
            </div>
            <div class="col-sm-12">
                <div class="text-center">
                    <br><a href="../logout.php"><button type="button" class="btn btn-danger btn-lg">Logout</button></a>
                </div>
            </div>
        </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
</body>

</html>