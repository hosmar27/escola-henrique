<?php
    include("conecta.php");

    $matricula  = $_POST["matricula"];
    $nome       = $_POST["nome"];
    $idade      = $_POST["idade"];

    /** se clicou no botão INSERIR: */
    if(isset($_POST["inserir"]))
    {
        $comando = $pdo->prepare("INSERT INTO alunos(nome,idade) VALUES('$nome',$idade)");
        $resultado = $comando->execute();
        header("Location: cadastro.html");      // Para voltar no formulário:
    }
    
    if(isset($_POST["excluir"]))
    {
        $comando = $pdo->prepare("DELETE FROM alunos WHERE matricula=$matricula");
        $resultado = $comando->execute();
        header("Location: cadastro.html");      // Para voltar no formulário:
    }

    if(isset($_POST["alterar"]))
    {
        $comando = $pdo->prepare("UPDATE alunos SET nome='$nome', idade=$idade WHERE matricula=$matricula");
        $resultado = $comando->execute();
        header("Location: cadastro.html");      // Para voltar no formulário:
    }
    
    if(isset($_POST["listar"]))
    {
        $comando = $pdo->prepare("SELECT * FROM alunos");
        $resultado = $comando->execute();
    
    while( $linhas = $comando->fetch() )
    {
        
        $M = $linhas["matricula"];  // Nome da coluna XAMPP //
        $M = $linhas["nome"];       // Nome da coluna XAMPP //
        $M = $linhas["idade"];      // Nome da coluna XAMPP //
        echo("Matricula: $M Nome: $N Idade: $i <br>");
    }
    }

?>