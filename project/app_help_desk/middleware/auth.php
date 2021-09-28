<?php
session_start();
  if($_SESSION['token'] !== true){
    header('Location: index.php');
  }
?>