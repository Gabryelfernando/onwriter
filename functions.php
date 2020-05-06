<?php
  function isOnline(){
     session_start();
       if(isset($_SESSION['id_user']))
           true;
      return false;
  }
?>
