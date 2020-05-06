<?php 
session_start();
include('link.php');

$entrar = $_POST['entrar'];
$login = mysqli_real_escape_string($link, $_POST['login']);
$senha = mysqli_real_escape_string($link, $_POST['senha']);
$query = "SELECT * FROM usuario WHERE login = '{$login}' AND senha = md5('{$senha}')";
  if (isset($entrar)) {
           
    $verifica = mysqli_query($link, $query) or die("erro ao selecionar");
    $dados = mysqli_fetch_array($verifica);
      if (mysqli_num_rows($verifica)>0){
        $_SESSION["user_id"]= $dados["user_id"];
        $_SESSION["login"] = $login;
        $_SESSION["senha"] = $senha;
        echo"<script language='javascript' type='text/javascript'>;window.location
        .href='http://localhost/onwriter/index.php';</script>";
            
        }
        else{
        echo"<script language='javascript' type='text/javascript'>
        alert('Login e/ou senha incorretos');window.location
        .href='http://localhost/onwriter/login.php';</script>";
      }
  }
?>