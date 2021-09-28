<?php 
  $numerosorteados = array();

  while(true){
    $num1 = rand(1, 60);
    if(!in_array( $num1 , $numerosorteados)){
      $numerosorteados[] = $num1;
    }
     
    if(count($numerosorteados) == 6) {
      break;
    } 
  }

  echo implode(',', $numerosorteados);
?>