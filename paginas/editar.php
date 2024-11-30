<!DOCTYPE html>
<?php

include("../db/operacoes.php");
$aluno = recuperarAlunoPeloId($_POST["id"]);
?>

<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Editar Aluno</title>

    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.2.1/css/bootstrap.min.css" integrity="sha384-GJzZqFGwb1QTTN6wy59ffF1BuGJpLSa9DkKMp0DgiMDm4iYMj70gZWKYbI706tWS" crossorigin="anonymous">
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.2.1/js/bootstrap.min.js" integrity="sha384-B0UglyR+jN6CkvvICOB2joaf5I4l3gm9GU6Hc1og6Ls7i6U/mkkaduKaBhlAXv9k" crossorigin="anonymous"></script>
    <link rel="stylesheet" type="text/css" href="../css/estilo.css">
    <meta charset="UTF-8">
</head>

<body>

    <div class="container">
        <div>
            <button type="button" class="btn btn-primary"><a href="../index.html"><- Voltar</a></button>
        </div>
        <div class="titulo">
            <h1>Editar Aluno</h1>
        </div>
        <form name="editarAluno" action="../db/operacoes.php" method="post">
            <div class="input-group mb-3">
                <div class="input-group-prepend">
                    <span class="input-group-text" id="inputGroup-sizing-default">Nome</span>
                </div>
                <input name="nome" value="<?= $aluno["Nome"] ?>" type="text" class="form-control" aria-label="Sizing example input" aria-describedby="inputGroup-sizing-default">
            </div>
            <div class="input-group mb-3">
                <div class="input-group-prepend">
                    <span class="input-group-text" id="inputGroup-sizing-default">Curso</span>
                </div>
                <input name="curso" value="<?= $aluno["Curso"] ?>" type="text" class="form-control" aria-label="Sizing example input" aria-describedby="inputGroup-sizing-default">
            </div>
            <div class="input-group mb-3">
                <div class="input-group-prepend">
                    <span class="input-group-text" id="inputGroup-sizing-default">Telefone</span>
                </div>
                <input name="telefone" value="<?= $aluno["Telefone"] ?>" type="text" class="form-control" aria-label="Sizing example input" aria-describedby="inputGroup-sizing-default">
            </div>
            <div class="input-group mb-3">
                <div class="input-group-prepend">
                    <span class="input-group-text" id="inputGroup-sizing-default">Email</span>
                </div>
                <input name="email" value="<?= $aluno["Email"] ?>" type="text" class="form-control" aria-label="Sizing example input" aria-describedby="inputGroup-sizing-default">
            </div>
            <div><input type="hidden" name="acao" value="alterar">
                <input type="hidden" name="id" value="<?= $aluno["ID"] ?>">
            </div>
            <div class="text-right"><input
                    class="btn btn-primary" type="submit" name="Enviar" value="Enviar"></div>
        </form>
    </div>
</body>

</html>