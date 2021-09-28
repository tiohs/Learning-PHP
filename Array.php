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
  echo '</pre>';
  echo '<br>';
  echo '<hr>';
  echo '<pre>';
  print_r($lista_frutas);
  echo '</pre>';

  // Assoativos 

  $lista_nome = [
    "hs" => "Hamilton Silva",
    "vb" => "Vagne Bilua"
  ];
  echo '<br>';
  echo '<hr>';
  echo '<pre>';
  print_r($lista_nome);
  echo '</pre>';
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
  <h2>in_array - ele retorna true para o parametro que esta a ser procurado </h2>
  <h2>array_search - ele retorna o indece ao valor pesquisa no array </h2>
  <?php 
    $lista_frutas = array('Banana', 'Maçã', 'Morango', 'Uva');
    echo '<br>';
    echo '<pre>';
    var_dump($lista_frutas);
    echo '</pre>';
    echo '<br>';
    echo 'Se existe banana : ' . in_array('Banana', $lista_frutas);
  ?>
  <hr>
  <h1>
    Funções Nativa de Array 
  </h1>

  <div>
    <h2><strong>isArray</strong></h2>
    <p>is_array verifica se o paramentro é um array</p>
    Ex : <?php 
      echo  "Lista de frute : " . is_array($lista_frutas);
    ?>
  </div>
  <div>
    <h2><strong>array_keys</strong></h2>
    <p>Retorna todas as chaves de Array</p>
    Ex : <?php 
      echo  "Lista de frute : " . var_dump(array_keys($lista_frutas));
    ?>
  </div>
  <div>
    <h2><strong>sort</strong></h2>
    <p>Ordena e reajusta os seus indeces </p>
    Ex : <?php 
      echo  "Lista de frute : " . var_dump(sort($lista_frutas));
    ?>
  </div>
  <div>
    <h2><strong>asort</strong></h2>
    <p>Ordena e preserva os indeces  </p>
    Ex : <?php 
      echo  "Lista de frute : " . var_dump(asort($lista_frutas));
    ?>
  </div>
  <div>
    <h2><strong>count</strong></h2>
    <p>Conta quantidade de array </p>
    Ex : <?php 
      echo  "Lista de frute : " . count($lista_frutas);
    ?>
  </div>
  <div>
    <h2><strong>array_merge</strong></h2>
    <p>Funde array ou mais array </p>
    Ex : <?php 
      echo  "Lista de numero : " ;
      echo '<pre>';
      echo var_dump(array_merge([1,2,3], [4,5,6]));
      echo '</pre>';
    ?>
  </div>
  <div>
    <h2><strong>explode</strong></h2>
    <p>Transforma uma string em array com delimitante  </p>
    Ex : <?php 
      $my = "H a m i l t o n" ;
      echo '<pre>';
      echo var_dump(explode(' ', $my));
      echo '</pre>';
    ?>
  </div>
  <div>
    <h2><strong>implode</strong></h2>
    <p>Faz o inverso de Transforma uma string em array com delimitante  </p>
    Ex : <?php 
      $my = ['H', 'S'];
      echo '<pre>';
      echo var_dump(implode('', $my));
      echo '</pre>';
    ?>
  </div>
  <h1>Loop - foreach</h1>
  <div>
    <h2><strong>ForEach</strong></h2>
    <p>Percorre cada um dos elementos  </p>
    Ex : <?php 
      foreach($lista_frutas as $itens) {
        echo "$itens <br/>";
      }
    ?>
    <h2> Mais complexo </h2>
    $funcionario = [
      ['nome' => 'Hamilton', 'idade' : 20],
      ['nome' => 'Hamilton', 'idade' : 20],
      ['nome' => 'Hamilton', 'idade' : 20]
      ];
  </div>
</body>
</html>