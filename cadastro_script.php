<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">

    <title>Cadastro</title>
</head>

<body>
    <div class="container">
        <div class="row">
            <?php

            include "conexao.php";

            $nome = $_POST['nome'];
            $endereco = $_POST['endereco'];
            $telefone = $_POST['telefone'];
            $email = $_POST['email'];
            $data_nascimento = $_POST['data_nascimento'];;

            $upload_nome_arquivo = basename($_FILES['arquivo']['name']);
            $upload_diretorio = "uploads/";
            $upload_arquivo_final = sha1(uniqid(time())) . '.' . $upload_nome_arquivo;
            $upload_result = move_uploaded_file($_FILES['arquivo']['tmp_name'], $upload_diretorio.$upload_arquivo_final);

            $sql = "INSERT INTO `pessoas` (`nome`, `endereco`, `telefone`, `email`, `data_nascimento`, `arquivo`) 
            VALUES ('$nome','$endereco','$telefone','$email','$data_nascimento', '$upload_arquivo_final')";

            if (mysqli_query($conn, $sql)) {
                message("$nome cadastrado com sucesso!", "success");
            } else {
                message("$nome não cadastrado", "danger");
            }
            ?>
            <a href="inicio.php"><button type="button" class="btn btn-info">Início</button></a>

        </div>

    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
</body>

</html>