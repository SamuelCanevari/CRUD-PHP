<!doctype html>
<html lang="pt-br">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>

    <title>Cadastro de usuario</title>

    <style>
        .box {
            background-color: lightgray;
            width: 500px;
            margin: 100px auto 0 auto;
            align-items: center;

            padding: 30px 50px 30px 50px;
        }
        .botoes {
            margin-top: 30px;

        }
        label {
            margin-top: 20px;
        }
    </style>


</head>

<body>
    <div class="container">
        <div class="box">
            <div>
                <h1>Cadastro de conta</h1><br>
                <form action="cadastro_user_script.php" method="POST">
                    <div class="was-validated">
                        <div>
                            <label for="validationTextarea">Nome completo</label>
                            <input type="text" class="form-control is-invalid" required name="nome">
                        </div>
                        <div>
                            <label for="validationTextarea" class="form-label">Login</label>
                            <input type="text" class="form-control" required name="login">
                        </div>
                        <div>
                            <label for="validationTextarea" class="form-label">Senha</label>
                            <input type="password" class="form-control" required name="senha">
                        </div>
                    </div>
                    <div class="botoes">
                        <a href="index.php"><button type="button" class="btn btn-dark">Voltar</button></a>
                        <input type="submit" class="btn btn-light" value="Cadastrar">
                    </div>
                </form>
            </div>
        </div>
    </div>
</body>

</html>