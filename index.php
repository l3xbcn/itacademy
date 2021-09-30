<!DOCTYPE HTML>
<html>

<head>
  <meta charset="UTF-8">
  <title>PHP_M5</title>
</head>

<body>
  
  <pre>
    <?php    
      // exercici 1.1
      $var_integer = 240;
      $var_double = 3.1416;
      $var_string = 'Hello';
      $var_boolean = true;
      echo "<br/>Variable entera : $var_integer";
      echo "<br/>Variable doble  : $var_double";
      echo "<br/>Variable string : $var_string";
      echo "<br/>Variable boolean: $var_boolean";

      // exercici 1.2
      $var_string_2 = ' world';
      echo "<br/>Longitud de cadena resultado de la concatenación de los strings \"$var_string\" y \"$var_string_2\": " . strlen($var_string . $var_string_2);
      echo "<br/>Orden inverso: " . strrev($var_string . $var_string_2);
      echo "<br/>Concatenació dels dos strings: $var_string$var_string_2";
      
      // exercici 1.3
      define('MI_NOMBRE','ALEJANDRO GALLARDO BARO');
      echo '<br/>Mi nombre: ' . MI_NOMBRE;

      // exercici 2.1
      $var_primos = array (2, 3, 5, 7, 11);
      $var_impares = array (1, 3, 5);

      // exercici 2.2
      array_push($var_impares, 7);
      $array_mezcla = array_merge($var_primos, $var_impares);
      
      // exercici 2.3
      echo "<br/>Tamaño de la mezcla de los arrays: " . sizeof($array_mezcla);

      // exercici 3.1
      echo "<br/>Valores del array: ";
      foreach($array_mezcla as $value) {
        echo "$value ";
      }

      // exercici 3.2
      $x = 7;
      $y = 4;
      $m = 7.5;
      $n = 2.25;

      // El valor de cada variable
      echo "<br/>Valor de x: $x";
      echo "<br/>Valor de y: $y";
      echo "<br/>Valor de m: $m";
      echo "<br/>Valor de n: $n";
      // La suma 
      echo "<br/>Suma de x + y: " . $x + $y;
      echo "<br/>Suma de m + n: " . $m + $n;
      // La resta 
      echo "<br/>Resta de x - y: " . $x - $y;
      echo "<br/>Resta de m - n: " . $m - $n;
      //El producte  
      echo "<br/>Multiplicación de x * y: " . $x * $y;
      echo "<br/>Multiplicación de m * n: " . $m * $n;
      // La divisió 
      echo "<br/>División de x / y: " . $x / $y;
      echo "<br/>División de m / n: " . $m / $n;
      // El mòdul
      // Los operandos del módulo se convierten en integers (por extracción de la parte decimal) antes del procesamiento:
      // https://www.php.net/manual/es/language.operators.arithmetic.php
      // Por eso el resultado es 1: 7.5 => 7, 2.25 => 2, 7 / 2 = 3 con módulo 1
      echo "<br/>Módulo de x, y: " . $x % $y;
      echo "<br/>Módulo de m, n: " . $m % $n;
      // El doble de cada variable
      echo "<br/>Doble de x: ". $x * 2;
      echo "<br/>Doble de y: ". $y * 2;
      echo "<br/>Doble de m: ". $m * 2;
      echo "<br/>Doble de n: ". $n * 2;
      // La suma de totes les variables
      echo "<br/>Suma de $x + $y + $m +   $n: " . $x + $y + $m + $n;
      // El producte de totes les variables
      echo "<br/>Producto de $x * $y * $m * $n: " . $x * $y * $m * $n;
    ?>
  </pre>

</body>