<!DOCTYPE HTML>
<html>

<head>
  <meta name="author" content="Alejandro Gallardo Baro">
  <meta name="description" content="Tasca PHP_M6">    
  <meta charset="UTF-8">
  <title>PHP_M6</title>
</head>

<body>
  
  <a href="index.php">Mostrar nuevamente todos los ejercicios</a>
  <pre>
    <?php

        // Ejercicio 3.2
        // NOTA: muestro antes este ejercicio porque es un formulario, el resto de ejercicios se muestran sólo si el formulario no se ha enviado
        function valor_xocolatas($quantitat = 0) {
            return $quantitat;
        }
        function valor_xiclets($quantitat = 0) {
            return $quantitat * 0.5;
        }
        function valor_carmels($quantitat = 0) {
            return $quantitat * 1.5;
        }
        if (!empty($_POST)) {
            $total = $total + $_POST['total'] + valor_xocolatas($_POST['xocolatas']) + valor_xiclets($_POST['xiclets']) + valor_carmels($_POST['carmels']);
        }
        else $total = 0;
        ?>
        <form action="index.php" method="post">
            <label for="total">Xocolatas:</label>
            <input type="number" id="xocolatas" name="xocolatas" min=0 value=0><br><br>
            <label for="total">Xiclets:</label>
            <input type="number" id="xiclets" name="xiclets" min=0 value=0><br><br>
            <label for="total">Carmels:</label>
            <input type="number" id="carmels" name="carmels" min=0 value=0><br><br>
            <label for="total">Total:</label>
            <input type="text" id="total" name="total" value="<?=$total?>"><br><br>
            <input type="submit" name="calcular" value="Calcular"/>
        </form>
        <?php    
        if (!empty($_POST)) die(); // El resto de ejercicios se muestran sólo si no se ha enviado el formulario
            
        // Ejercicio 1.1
        echo '<br/>La resta de 5 y 3 es: ' . resta (5, 3);
        function resta ($numa, $numb) {
            return $numa - $numb;
        }

        // Ejercicio 1.2 a 1.3
        parell_o_imparell(5);
        parell_o_imparell(8);
        function parell_o_imparell ($numero) {
            if ($numero%2 == 0) {
                echo "<br/>$numero es par";
            } else { 
                echo "<br/>$numero es impar";
            }
        }

        echo '<br/>Bucle que cuenta desde 0 hasta 10: ';
        // Ejercicio 1.4
        for($x=0;$x<=10;$x++) {
            echo "$x ";
        }

        // Ejercicio 2.1 a 2.3
        echo '<br/>Llamada a una función que cuenta de dos en dos desde 0 hasta un tope (parámetro no especificado en la llamada cuyo valor por defecto es 10): ';
        dos_en_dos();
        echo '<br/>El mismo bucle especificando como tope 12: ';
        dos_en_dos(12);
        function dos_en_dos ($tope = 10) {
            for($x=0;$x<=$tope;$x=$x+2) {
                echo "$x ";
            }
        }
        
        // Ejercicio 3.1
        echo '<br/>Años olímpicos desde 1960 hasta 2016: ';
        for($año=1960;$año<=2016;$año=$año+4) {
            echo "$año ";
        }

        // Ejercicio 3.3 (criba de Eratóstenes)
        $tope=60; // último número primo que se podría obtener. en el caso de 60 el último es el 59
        for ($n=2;$n<=$tope;$n++) { // Se recorre la lista de cribados desde el número 2 (no cribado, primer primo) hasta el tope definido anteriormente
            if (!$cribados[$n]) { // Si no se ha cribado (no está marcado como true, es primo)... 
                for ($i=$n*$n;$i<=$tope;$i+=$n) { // ...recorrer los múltiplos ...
                    $cribados[$i] = true; // ...y cribarlos (marcarlo como true, no es primo)
                }
            }
        }
        echo "<br/>Primos obtenidos mediante criba de Eratóstenes: ";
        for ($n = 2; $n <= $tope; $n++) { // Muestro la lista de los primos (los no cribados marcados con true )
            if (!$cribados[$n]) {
                echo "$n ";
            }
        }        

    ?>
  </pre>
</body>
</html>