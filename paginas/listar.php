<!DOCTYPE html>
<?php include("../db/operacoes.php");

$alunos = lerAlunos();
?>

<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <title>Alunos Cadastrados</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.2.1/css/bootstrap.min.css" integrity="sha384-GJzZqFGwb1QTTN6wy59ffF1BuGJpLSa9DkKMp0DgiMDm4iYMj70gZWKYbI706tWS" crossorigin="anonymous">
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.2.1/js/bootstrap.min.js" integrity="sha384-B0UglyR+jN6CkvvICOB2joaf5I4l3gm9GU6Hc1og6Ls7i6U/mkkaduKaBhlAXv9k" crossorigin="anonymous"></script>
    <link rel="stylesheet" type="text/css" href="../css/estilo.css">
</head>

<body>


    <div class="container">
        <div>
            <button type="button" class="btn btn-primary"><a href="../index.html"><- Voltar</a></button>
        </div>

        <div class="titulo">
            <h1>Lista de Alunos Cadastrados</h1>
        </div>
        <table border="1" class="table">
            <thead class="thead-light">
                <tr>
                    <th>Nome</th>
                    <th>Curso</th>
                    <th>Telefone</th>
                    <th>Email</th>
                    <th>Editar</th>
                    <th>Excluir</th>
                </tr>
            </thead>
            <tbody>
                <?php
                foreach ($alunos as $aluno) { ?>

                    <tr>
                        <th><?= $aluno["Nome"] ?></th>
                        <th><?= $aluno["Curso"] ?></th>
                        <th><?= $aluno["Telefone"] ?></th>
                        <th><?= $aluno["Email"] ?></th>
                        <th>
                            <form name="editar" action="editar.php" method="post">
                                <input type="hidden" name="id" value="<?= $aluno["ID"] ?>">
                                <input type="submit"
                                    class="btn btn-light" name="editar" value="Editar">
                            </form>
                        </th>
                        <th>
                            <form name="excluir" action="../db/operacoes.php" method="post">
                                <input type="hidden" name="id" value="<?= $aluno["ID"] ?>">
                                <input type="hidden"
                                    name="acao" value="excluir">
                                <input type="submit"
                                    class="btn btn-danger" name="excluir" value="Excluir">
                            </form>
                        </th>
                    </tr>
                <?php }
                ?>
            </tbody>
        </table>

    </div>
</body>

</html>