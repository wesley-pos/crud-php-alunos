<?php

// CONEXAO COM O BANCO DE DADOS
// OPERAÇÕES CRUD - Create, Read, Update, Delete

if (isset($_POST["acao"])) {
    switch ($_POST["acao"]) {
        case "inserir":
            inserirAluno();
            break;
        case "alterar":
            alterarAluno();
            break;
        case "excluir":
            excluirAluno();
            break;
        default:
            echo "Ação inválida.";
    }
}


function criarConexao()
{
    $servername = "localhost";
    $username = "root";
    $password = "";
    $database = "projeto";

    $conexao = new mysqli($servername, $username, $password, $database);

    if (!$conexao) {
        print_r("FALHOU CONECT");
        die("Conexão falhou. Erro: " . mysqli_connect_error());
    }

    return $conexao;
}


function recuperarAlunoPeloId($id)
{
    $bd = criarConexao();
    $sql = "SELECT * FROM Aluno WHERE ID='{$id}'";
    $resultado = $bd->query($sql);
    $bd->close();

    $aluno = mysqli_fetch_assoc($resultado);
    return $aluno;
}



function inserirAluno()
{
    $bd = criarConexao();
    $sql = "INSERT INTO Aluno(Nome, Curso, Telefone, Email) 
        VALUES ('{$_POST["nome"]}','{$_POST["curso"]}','{$_POST["telefone"]}','{$_POST["email"]}')";
    $bd->query($sql);
    $bd->close();
    header("Location:../index.html");
}

function lerAlunos()
{
    $bd = criarConexao();
    $sql = "SELECT * FROM Aluno ORDER BY nome";
    $resultado = $bd->query($sql);
    $bd->close();

    while ($row = mysqli_fetch_array($resultado)) {
        $alunos[] = $row;
    }
    return $alunos;
}


function alterarAluno()
{
    $bd = criarConexao();
    $sql = "UPDATE Aluno SET Nome='{$_POST["nome"]}',Curso='{$_POST["curso"]}',Telefone='{$_POST["telefone"]}',Email='{$_POST["email"]}' WHERE id='{$_POST["id"]}'";
    $bd->query($sql);
    $bd->close();
    header("Location:../index.html");
}

function excluirAluno()
{
    $bd = criarConexao();
    $sql = "DELETE FROM Aluno WHERE ID='{$_POST["id"]}'";
    $bd->query($sql);
    $bd->close();
    header("Location:../index.html");
}
