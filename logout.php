<?php
session_start();
session_destroy();
echo"<script language='javascript' type='text/javascript'>;window.location
        .href='login.php';</script>";
?>