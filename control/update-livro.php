<?php 
 
session_start();
include('link.php'); 

$livro_id = isset($_GET['livro_id'])?$_GET['livro_id']:null;
$titulo = isset($_POST['titulo'])?$_POST['titulo']:null;
$paginas = isset($_POST['paginas'])?$_POST['paginas']:null;
$data = isset($_POST['data'])?$_POST['data']:null;
$genero = isset($_POST['genero'])?$_POST['genero']:null;
$finalizado = isset($_POST['finalizado'])?$_POST['finalizado']:null;
$query = "UPDATE livros SET titulo = '$titulo', paginas = '$paginas',  data = '$data', genero = '$genero', finalizado = '$finalizado' WHERE livro_id = '$livro_id'";
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