<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Manipular String</title>
</head>
<body>
  <h1> Manipulação de String </h1>
  <?php
    echo "Transforma todos os dados em minusculo <br>"; 
    echo strtolower('Hamilton Silva');
    
  ?>
  <br>
  <br>
  <?php
    echo "Transforma todos os dados em maiúsculos <br>"; 
    echo strtoupper('Hamilton Silva');
  ?>
   <br>
    <br>
  <?php
    echo "Transforma todos a primeira letra em maiúsculos <br>"; 
    echo ucfirst('hamilton') . " " . ucfirst('silva');
    
  ?>
  <br>
  <br>
  <?php
    echo "Quantidade de caracter <br>"; 
    echo strlen('hamilton'). " " . ucfirst('hamilton');  
  ?>
  <br>
  <br>
  <?php
    echo "Substituir uma cadeia de carater por um outro  <br>"; 
    echo str_replace(' ', ',', 'Hamilton Silva gosta de comer');  
  ?>
  <br>
  <br>
  <?php
    echo "Retorna a parte de uma string  <br>"; 
    echo substr("Hamilton", 0, 3);  
  ?>
 
</body>
</html>