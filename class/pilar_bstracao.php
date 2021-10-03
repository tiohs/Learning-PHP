<?php
  // Model

  class Officer {
    // attribute

    public $name = null;
    public $phoneNumber = null;
    public $childNumber = null;

    // Metodos 

    // function getCodFunc () {
    //   return 'Esse é o resumo do cadastro do funcionario !';
    // }

    // function setNumChild () {

    // }

    // getters setters (overloadigng / sobrecargar )

    function __set($attribute, $value){
      $this->$attribute = $value;
    }

    function __get($attribute) {
      return $this->$attribute;
    }
  }



?>