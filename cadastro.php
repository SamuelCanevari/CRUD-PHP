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
        <br><h1>Cadastro</h1><br>
        <div class="row">
            <div class="col">
                <form action="cadastro_script.php" method="POST">
                    <div class="form-group">
                        <label for="nome" class="form-label">Nome completo</label>
                        <input type="text" class="form-control" name="nome"><br>
                    </div>
                    <div class="form-group">
                        <label for="endereço" class="form-label">Endereço</label>
                        <input type="text" class="form-control" name="endereco"><br>
                    </div>
                    <div class="form-group">
                        <label for="telefone" class="form-label">Telefone</label>
                        <input type="text" class="form-control" name="telefone"><br>
                    </div>
                    <div class="form-group">
                        <label for="email" class="form-label">E-mail</label>
                        <input type="email" class="form-control" name="email"><br>
                    </div>
                    <div class="form-group">
                        <label for="data" class="form-label">Data de nascimento</label>
                        <input type="date" class="form-control" name="data_nascimento"><br>
                    </div>
                    <div class="form-group">
                        <a href="inicio.php" ><button type="button" class="btn btn-dark">Voltar</button></a>
                        <input type="submit" class="btn btn-success" value="Cadastrar"/>
                    </div>
                </form>
            </div>
        </div>

    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
</body>
</html>