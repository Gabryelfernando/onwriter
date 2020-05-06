<?php 
 
session_start();
include('link.php'); 

$id = $_SESSION['user_id'];
$nome = isset($_GET['nome'])?$_GET['nome']:null;
$login = isset($_GET['login'])?$_GET['login']:null;
$query = "UPDATE usuario SET login = '$login', nome = '$nome' WHERE user_id = '$id'";
$verifica = mysqli_query($link, $query);
if($verifica){
          echo"<script language='javascript' type='text/javascript'>
          alert('Alterado com sucesso');window.location.
          href='http://localhost/onwriter/perfil.php'</script>";
        }else{
          echo"<script language='javascript' type='text/javascript'>
          alert('Não foi possivel alterar');window.location
          .href='http://localhost/onwriter/perfil.php'</script>";
        }
    
?>