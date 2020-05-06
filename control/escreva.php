<?php 
 
session_start();
include('link.php'); 


$titulo = isset($_POST['titulo'])?$_POST['titulo']:null;
$paginas = isset($_POST['paginas'])?$_POST['paginas']:null;
$data = isset($_POST['data'])?$_POST['data']:null;
$genero = isset($_POST['genero'])?$_POST['genero']:null;
$texto = isset($_POST['texto'])?$_POST['texto']:null;
$finalizado = isset($_POST['finalizado'])?$_POST['finalizado']:null;
$fk_autor = isset($_SESSION['user_id'])?$_SESSION['user_id']:null;
$query = "INSERT INTO livros (fk_autor,titulo,paginas,data,genero,texto,finalizado) VALUES ('$fk_autor','$titulo','$paginas','$data',
'$genero','$texto','$finalizado')";
$insert = mysqli_query($link, $query);

if($insert){
  echo"<script language='javascript' type='text/javascript'>
  alert('Livro salvo com sucesso!');window.location.
  href='http://localhost/onwriter/perfil.php'</script>";
}else{
  echo"<script language='javascript' type='text/javascript'>
  alert('Não foi possível salvar o livro');window.location
  .href='escreva.php'</script>";
}
      
?>