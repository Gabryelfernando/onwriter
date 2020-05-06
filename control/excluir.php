<?php 
 
session_start();
include('link.php'); 

$livro_id = isset($_GET['livro_id'])?$_GET['livro_id']:null;
$query = "DELETE FROM livros WHERE livro_id = '$livro_id'";
$verifica = mysqli_query($link, $query);
if($verifica){
          echo"<script language='javascript' type='text/javascript'>
          alert('Excluido com Sucesso');window.location.
          href='http://localhost/onwriter/perfil.php'</script>";
        }else{
          echo"<script language='javascript' type='text/javascript'>
          alert('Não foi possivel Excluir');window.location
          .href='http://localhost/onwriter/perfil.php'</script>";
        }
    
?>