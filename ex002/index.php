<!DOCTYPE html>
<html lang="pt-br">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Tipos primitivos em PHP</title>
</head>

<body>
  <h1>Teste de tipos primitivos</h1>
  <?php
  // Tipos escalares:

  // Tipo numérico (int)
  $num = 300;
  echo "O valor da variável é $num";

  // Para saber o tipo da variável
  $tipoVariavel = 24;
  var_dump($tipoVariavel);

  // Para "forçar" um tipo (coerção)
  $forcandoTipo = (int)3.14;
  var_dump($forcandoTipo);

  // Tipo booleano
  $casado = true;
  echo "Valores booleanos não aparecem com echo ou print $casado";
  ?>

  <?php
  // Tipos compostos

  // Array
  $vet = [6, 2, 9, 3, 5];
  var_dump($vet);
  ?>
</body>

</html>