<?php
    include '../conecta.php';
    $codlivro=$_GET['codlivro'];
    $autor = $_POST['autor'];
    $editora = $_POST['editora'];
    $exemplares = $_POST['exemplares'];
    $genero = $_POST['genero'];
    $paginas = $_POST['paginas'];
    $titulo = $_POST['titulo'];

    $consulta = $conexao -> prepare("UPDATE livros SET autor='$autor',editora='$editora', exemplares = '$exemplares', genero = '$genero', paginas = '$paginas', titulo='$titulo' WHERE codlivro ='$codlivro'");
    $consulta -> execute();

    header('Location: index.php');
?>
