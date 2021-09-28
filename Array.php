<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Array</title>
</head>
<body>
  <h1> Array Declaração </h1>

  <?php 

  $lista_frutas = array('Banana', 'Maçã', 'Morango', 'Uva');
  echo '<br>';
  echo '<pre>';
  var_dump($lista_frutas);
  echo '<pre>';
  echo '<br>';
  echo '<hr>';
  echo '<pre>';
  print_r($lista_frutas);
  echo '<pre>';

  // Assoativos 

  $lista_nome = [
    "hs" => "Hamilton Silva",
    "vb" => "Vagne Bilua"
  ];
  echo '<br>';
  echo '<hr>';
  echo '<pre>';
  print_r($lista_nome);
  echo '<pre>';
  echo $lista_nome['hs'];
  ?>
  <br>
  <br>
  <br>
  <h1>Array Multimencional </h1>
  <br>
  
  <?php 
    $lista_coisas = [
      ['Hamilton silva', 'Carlos José'],
      ['Banana', 'Morango']
    ]
  ?>
  <pre>
    <?=var_dump($lista_coisas)?>
  </pre>
  <br>
  <br>
  <br>
  <h1>Array Pesquisa PHP </h1>
  <br>
  
  <?php 
    $lista_coisas = [
      ['Hamilton silva', 'Carlos José'],
      ['Banana', 'Morango']
    ]
  ?>
  <pre>
    <?=var_dump($lista_coisas)?>
  </pre>
</body>
</html>