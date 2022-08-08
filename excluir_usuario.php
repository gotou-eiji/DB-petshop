<?php
    include 'conecta.php';
    $id = $_GET['id'];
    $sql = "DELETE FROM usuario WHERE id='$id'";
    if(mysqli_query($con,$sql)){
        echo "<script language='javascript' type = 'text/javascript'>
                 alert('Usuário deletado com sucesso!');
                 window.location.href='usuario.php';
                 </script>";
    }else{
        echo "<script language='javascript' type = 'text/javascript'>
                 alert('Usuário não pode ser apagado!');
                 window.location.href='usuario.php';
                 </script>";
    }
?>