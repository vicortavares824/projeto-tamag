<?php 
session_start();
if(!isset($_SESSION['autenticado']) || $_SESSION['autenticado'] != 'sim'){
  header('Location: ../Login.php?login=false2');
}
?>