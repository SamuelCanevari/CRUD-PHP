<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <title>Editar</title>
</head>

<body>
    <?php
    include "conexao.php";

    $id = $_GET['id'] ?? '';
    $sql = "SELECT * FROM pessoas WHERE cod_pessoa = $id";

    $dados = mysqli_query($conn, $sql);
    $linha =  mysqli_fetch_assoc($dados);
    ?>


    <div class="container">
        <div class="row">
            <div class="col">
                <br><h1>Editar dados</h1><br>
            <form action="update_script.php" method="POST">
                    <div class="form-group">
                        <label for="nome" class="form-label">Nome completo</label>
                        <input type="text" class="form-control" name="nome" required value="<?php echo $linha['nome'];?>">
                    </div>
                    <div class="form-group">
                        <label for="endereço" class="form-label">Endereço</label>
                        <input type="text" class="form-control" name="endereco" value="<?php echo $linha['endereco'];?>">
                    </div>
                    <div class="form-group">
                        <label for="telefone" class="form-label">Telefone</label>
                        <input type="text" class="form-control" name="telefone" value="<?php echo $linha['telefone'];?>">
                    </div>
                    <div class="form-group">
                        <label for="email" class="form-label">E-mail</label>
                        <input type="email" class="form-control" name="email" value="<?php echo $linha['email'];?>">
                    </div>
                    <div class="form-group">
                        <label for="data" class="form-label">Data de nascimento</label>
                        <input type="date" class="form-control" name="data_nascimento" value="<?php echo $linha['data_nascimento'];?>">
                    </div>
                    <hr>
                    <div class="form-group">
                        <a href="pesquisa.php" ><button type="button" class="btn btn-dark">Voltar</button></a>
                        <input type="submit" class="btn btn-success" value="Salvar alterações"/>
                        <input type="hidden" name="id" value="<?php echo $linha['cod_pessoa']?>"/> 
                    </div>
                </form>
                <br>
                
            </div>
        </div>

    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
</body>
</html>