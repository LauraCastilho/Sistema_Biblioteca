<?php
    include '../conecta.php';

    $nome = strtoupper($_POST['nome']);
    $email = $_POST['email'];
    $telefone = $_POST['telefone'];
    $celular = $_POST['celular'];
    $nascimento = $_POST['nascimento'];
    $turma = strtoupper($_POST['select']);

    $consulta = $conexao -> prepare("INSERT INTO aluno(nome,email,tel,celular,dataNascimento,turma) 
    VALUES ('$nome','$email','$telefone','$celular','$nascimento','$turma')");

    $consulta -> execute();
    header('Location: index.php');

?>