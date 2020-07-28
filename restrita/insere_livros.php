<?php
    include '../conecta.php';

    $titulo = strtoupper($_POST['titulo']);
    $autor = strtoupper($_POST['autor']);
    $editora = strtoupper($_POST['editora']);
    $paginas = $_POST['paginas'];
    $exemplares = $_POST['exemplares'];
    $genero = strtoupper($_POST['genero']);

    $consulta = $conexao -> prepare("INSERT INTO livros (titulo,autor,editora,paginas,exemplares,genero) VALUES ('$titulo','$autor','$editora','$paginas','$exemplares','$genero')");
    $consulta -> execute();
    header('Location: index.php'); 
?>