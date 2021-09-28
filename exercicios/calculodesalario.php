<?php 

function calcularIRPF($salario) {
  $imposto = 0;
  if($salario <= 1000) {
    $imposto = 0;
  } 
  return $imposto;
}

?>