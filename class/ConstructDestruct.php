<?php

  class Person {
    public $name = null;

    // Metodo construct ele funciona quando uma classe é criada 
    function __construct($name) {
      $this->name = $name;
    }

    function __get($atrribute){
      return $this->$atrribute;
    }

    function __destruct(){
      echo 'Eliminar';
    }
  }

  $person = new Person('Hamilton Silva');
  echo 'Eu sou o : '.$person->__get('name');
  echo '<br />';
  unset($person); // Remover objetos 
?>