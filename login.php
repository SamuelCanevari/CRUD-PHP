<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- CSS only -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <!-- JavaScript Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>

    <link rel="stylesheet" href="style.css">

    <title>Login</title>
</head>

<body>
    <div class="container">
        <div class="row">
            <div class="col-6">
                <form action="login.php" method="POST">
                    <h1 class="display-4" id="titleLogin">Login</h1><br>
                    <div class="mb-3 row">
                        <label for="exampleInputEmail" class="col-sm-2 col-form-label">Login</label>
                        <div class="col-sm-8">
                            <input type="text" class="form-control" name="login">
                        </div>
                    </div>
                    <div class="mb-4 row">
                        <label for="inputPassword" class="col-sm-2 col-form-label">Senha</label>
                        <div class="col-sm-8">
                            <input type="password" class="form-control" name="senha">
                        </div>
                    </div>
                    <button type="submit" class="btn btn-primary">Acessar</button>
                </form>
                <?php
                if (isset($_POST['login'])) {
                    $login = $_POST['login'];
                    $senha = $_POST['senha'];

                    if (($login == "admin") and ($senha == "admin")) {
                        session_start();
                        $_SESSION['user'] = "Nome";
                        header("location: restrito/inicio.php");
                    } else {
                        echo "Dados inválidos!";
                    }
                }
                ?>
            </div>
        </div>
    </div>



</body>

</html>