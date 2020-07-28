<?php
    include '../conecta.php';
    $ra=$_GET['ra'];
    echo "<div id='certeza'> </div>";
    // Aqui Deleta o Emprestimo realizado pelo aluno caso tenha, para que ele possa ser deletado
   $query = $connect->prepare("DELETE from emprestimo_devolucao where ra=$ra");
   $query->execute();
   $query = $connect->prepare("DELETE from aluno where ra=$ra");
   $query->execute();
    header('Location: index.php');
?>
