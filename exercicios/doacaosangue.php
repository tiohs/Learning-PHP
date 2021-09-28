<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Doação de Sangue</title>
</head>
<body>
  <?php 
    $idade = 20;
    $peso = 50;

    // "Atendendo aos requisitos" "Não atendo aos requisitos"
  ?>

  Valor : <?= !!(($idade >= 16 and $idade <= 69) and ($peso >= 50) ) ? "Atendendo aos requisitos" : "Não atendo aos requisitos"; ?>
</body>
</html>