<?php
    include("conecta.php");

    // PARA PEGAR O TEXTO DOS INPUTS
    $matricula = $_POST["matricula"];
    $nome  = $_POST["nome"];
    $idade = $_POST["idade"];

    $comando = $pdo->prepare("INSERT INTO alunos VALUES ('$matricula','$nome',$idade)");

    $resultado = $comando->execute();

    //para voltar no formulário:
    
    header("Location: cadastro.html");

?>