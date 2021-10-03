<?php

  class Person {
    public $name = null;

    // Metodo construct ele funciona quando uma classe é criada 
    function __construct() {
      echo 'Obejecto criado ';
    }
  }

  $person = new Person();
?>