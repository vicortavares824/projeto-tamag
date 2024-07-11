<?php 
session_start();
if(!isset($_SESSION['autenticado']) || $_SESSION['autenticado'] != 'sim'){
  header('Location: ../LoginADM.php?login=false2');
}
?>