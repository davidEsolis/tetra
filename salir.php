<?php 
  setCookie('id', '', time() - 1000);
  setCookie('usuario', '', time() - 1000);
  header('Location: entrar.php');
?>