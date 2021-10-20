<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">

    <title>Cadastro usuário</title>
</head>

<body>
    <div class="container">
        <div class="row">
            <?php

            include "restrito/conexao.php";

            $nome = $_POST['nome'];
            $login = $_POST['login'];
            $senha = md5($_POST['senha']);

            $sql = "INSERT INTO `usuarios` (`nome`, `login`, `senha`) VALUES ('$nome','$login','$senha')";

            if (mysqli_query($conn, $sql)) {
                message("Conta criada. Nome do usuário: $nome", "success");
            } else {
                message("Erro ao criar conta, login já existente. Tente criar outro", "danger");
            }
            ?>
            <a href="index.php"><button type="button" class="btn btn-info">Início</button></a>
        </div>

    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
</body>

</html>