<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>

    <title>Login</title>

    <style>
        #box {
            background-color: #dcdbff;
            width: 400px;
            padding: 20px 40px 20px 40px;
            margin: 100px auto 0 auto;
        }
        #cadastro {
            margin-top: 20px;
        }

    </style>
</head>

<body>
    <div class="container">
        <div class="row">
            <div class="col-4" id="box">
                <h1>Login</h1><br>
                <form action="index.php" method="POST">
                    <div class="mb-3">
                        <label for="exampleInputEmail1" class="form-label">Insira login</label>
                        <input type="text" class="form-control" required name="login">
                    </div>
                    <div class="mb-3">
                        <label for="exampleInputPassword1" class="form-label">Insira senha</label>
                        <input type="password" class="form-control" required name="senha">
                    </div>
                    <button type="submit" class="btn btn-primary">Logar</button>
                    <p id="cadastro">Ainda não tem cadastro? <a href="cadastro_user.php">clique aqui</a></p>
                </form>
                <?php

                if (isset($_POST['login'])) {
                    $login = $_POST['login'];
                    $senha = md5($_POST['senha']);

                    include "restrito/conexao.php";
                    $sql = "SELECT * FROM usuarios WHERE login = '$login' AND senha = '$senha'";

                    if ($result = mysqli_query($conn, $sql)) {
                        $num_registros = mysqli_num_rows($result);
                        if ($num_registros == 1) {
                            $linha = mysqli_fetch_assoc($result);

                            if (($login == $linha['login']) and ($senha == $linha['senha'])) {
                                session_start();
                                $_SESSION['user'] = $linha['id_usuario'];
                                header("location: restrito");
                            }
                        } else {
                            echo "login ou senha inválidos";
                        }
                    }
                }
                ?>
            </div>
        </div>
    </div>
</body>

</html>