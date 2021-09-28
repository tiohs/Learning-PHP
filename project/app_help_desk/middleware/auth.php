<?php
session_start();
  if(!$_SESSION['token']){
    header('Location: index.php');
  }
?>