<?php include "../validar.php";


function mostra_data($data)
{
    $d = explode("-", $data);
    $escreve = $d[2] . "/" . $d[1] . "/" . $d[0];
    return $escreve;
}

?>
<!doctype html>
<html lang="pt-br">

<head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">

    <title>Pesquisa</title>
</head>

<body>
    <?php 

    $pesquisa = $_POST["busca"] ?? "";
    include "conexao.php";

    $sql = "SELECT * FROM pessoas WHERE nome LIKE '%$pesquisa%'";
    $dados = mysqli_query($conn, $sql); 
    ?>

    <div class="container">
        <div class="row">
            <div class="col">
                <br>
                <h1>Pesquisar</h1><br>
                <form action="pesquisa.php" method="POST">
                    <div class="input-group">
                        <input type="search" class="form-control rounded" placeholder="Digite um nome para pesquisar..." aria-label="Search" name="busca" />
                        <button type="submit" class="btn btn-outline-primary">Pesquisar</button>
                    </div><br>
                </form>

                <table class="table table-hover">
                    <thead>
                        <tr>
                            <th scope="col">Nome</th>
                            <th scope="col">Endereço</th>
                            <th scope="col">Telefone</th>
                            <th scope="col">E-mail</th>
                            <th scope="col">Data de nascimento</th>
                            <th scope="col">Opções</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php
                        while ($linha = mysqli_fetch_assoc($dados)) {
                            $cod_pessoa = $linha["cod_pessoa"];

                            $nome = $linha["nome"];
                            $endereco = $linha["endereco"];
                            $telefone = $linha["telefone"];
                            $email = $linha["email"];
                            $data_nascimento = $linha["data_nascimento"];
                            $data_nascimento = mostra_data($data_nascimento);

                            echo "<tr>
                                <th scope='row'>$nome</th>
                                <td>$endereco</td>
                                <td>$telefone</td>
                                <td>$email</td>
                                <td>$data_nascimento</td>
                                <td>
                                <a href='update.php?id=$cod_pessoa'><button type='button' class='btn btn-success btn-sm'>Editar</button></a>
                                <a href='#1'><button type='button' class='btn btn-danger btn-sm' data-bs-toggle='modal' data-bs-target='#modal_confirma' onClick=" . '"' . "get_data($cod_pessoa, '$nome')" . '"' . ">Deletar</button></a>
                                </td>
                            </tr>";
                        }
                        ?>
                    </tbody>
                </table>
                <br>
                <a href="index.php"><button type="button" class="btn btn-dark">Voltar</button></a>
                <a href="../logout.php"><button type="button" class="btn btn-danger">Desconectar</button></a>
            </div>
        </div>
        <div class="modal" id="modal_confirma">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title">Confirmação de exclusão</h5>
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                    <form action="delete_script.php" method="POST">
                        <div class="modal-body">
                            <p>Deseja realmente excluir <b id="nome_pessoa">nome_pessoa ?</b>?</p>
                        </div>
                        <div class="modal-footer">
                            <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Não</button>
                            <input type="hidden" name="id" id="cod_pessoa" value="" />
                            <input type="hidden" name="nome" id="nome_pessoa_1" value="" />
                            <input type="submit" class="btn btn-primary" value="Sim" />
                        </div>
                    </form>
                </div>
            </div>
        </div>
        <div>

            <script type="text/javascript">
                function get_data(id, nome) {
                    document.getElementById('nome_pessoa').innerHTML = nome;
                    document.getElementById('cod_pessoa').value = id;
                    document.getElementById('nome_pessoa_1').value = nome;
                }
            </script>
        </div>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
</body>

</html>