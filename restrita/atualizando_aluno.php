<?php
    include '../conecta.php';
    $ra=$_GET['ra'];
    $nome = $_POST['nome'];
    $email = $_POST['email'];
    $telefone = $_POST['telefone'];
    $celular = $_POST['celular'];
    $nascimento = $_POST['nascimento'];
    $turma = $_POST['select'];

    $consulta = $conexao -> prepare("UPDATE aluno SET nome='$nome',email='$email', dataNascimento = '$nascimento', celular = '$celular', tel = '$telefone', turma='$turma' WHERE ra='$ra'");
    $consulta -> execute();

    header('Location: index.php');
?>
