<!DOCTYPE html>
<html lang="pt-br">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Manipulação de Strings</title>
</head>

<body>
  <h1>Manipulação de Strings</h1>

  <?php
  $nome = "Luka";
  $sobrenome = "Barth";

  echo "$nome $sobrenome";

  // Aspas simples não interpreta as variáveis
  $nome = "Luka";
  $sobrenome = "Barth";

  echo '$nome $sobrenome';

  // E quando queremos colocar aspas duplas no meio da interpolação?

  $pnome = "Rodrigo";
  $snome = "Nogueira";

  echo "$pnome \"Minotauro\" $snome";
  ?>
</body>

</html>