<?php 
 
session_start();
include('link.php'); 


$nome = $_POST['nome'];
$login = $_POST['login'];
$senha = MD5($_POST['senha']);
$query = "SELECT * FROM usuario WHERE login = '$login' AND senha = '$senha'";
$select = mysqli_query($link, $query);
 
$query = "INSERT INTO usuario (login,senha,nome) VALUES ('$login','$senha','$nome')";
$insert = mysqli_query($link, $query);
if($insert){
          echo"<script language='javascript' type='text/javascript'>
          alert('Usuário cadastrado com sucesso!');window.location.
          href='http://localhost/onwriter/login.php'</script>";
        }else{
          echo"<script language='javascript' type='text/javascript'>
          alert('Não foi possível cadastrar esse usuário');window.location
          .href='registrar.php'</script>";
        }
    
?>