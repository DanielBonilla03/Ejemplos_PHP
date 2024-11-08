<?php 
//EXPRESIONES ARITMÉTICAS
//No es necesiario inicializar variables en php, sin embargo, es mjy buena practica las variables inicializadas, tienen un valor predeterminado de acuerto a su tipo depentiendo del contexto en el que son usadas. Las booleanas se asumen como false, los enteros y flotantes como cero, las cadenas (ej, usadas en echo) se establecen como una cadena vacía y los arrays se establecen como un array vacío.


$a = 20;
$b = 3;
$resultado = 0;

//Suma
echo "<h4>SUMA</h4>";
$resultado = $a + $b;
echo "$a + $b es $resultado <br>";

//Resta
echo "<h4>RESTA</h4>";
$resultado = $a - $b;
echo "$a - $b es $resultado <br>";

//Producto
$resultado = $a * $b;
echo "<h4>PRODUCTO</h4>";
echo "$a * $b es $resultado <br>";

//División
$resultado = $a / $b;
echo "<h4>DIVISIÓN</h4>";
echo "$a / $b es $resultado <br>";

//Módulo (Es el resto de la división)
$resultado = $a % $b;
echo "<h4>MODULO</h4>";
echo "$a % $b es $resultado <br>";

//Division entera
$resultado = (int)($a / $b);
echo "<h4>DIVISION INT</h4>";
echo "$a / $b es $resultado <br>";

//Incrementos. Post-Incremento; Demvuelve el valor y luego lo incrementa
echo "<h4>POST-INCREMENTO</h4>";
$resultado = $a++; //$resultado = a; $a + 1
echo "El valor de a con post-incremento es:$a. El valor de resultado es $resultado <br> ";

//Pre-incremento
echo "<h4>PRE-INCREMENTO</h4>";
$resultado = ++$a; //$a = $a+1; $resultado = $a
echo "El valor de a con pre-incremento es: $a. El valor de resultado es $resultado <br>";

//Post-decremento
echo "<h4>POST-DECREMENTO</h4>";
$a = 20;
$resultado = $a--; //Resultado = 20; $a = 19;
echo "El valor de a con post-decremento es: $a. El valor del resultado es: $resultado <br>";

//Pre-decremento
echo "<h4>PRE-DECREMENTO</h4>";
$a = 20;
$resultado = --$a; 
echo "El valor de a con post-decremento es: $a. El valor del resultado es: $resultado <br>";

//Asignacion con operadores
echo "<h4>ASIGNACION CON OPERADORES</h4>";
$a = 20;
$a += 10; //$a = $a +10
echo "El valor de 20 += 10 es: $a <br>";

$a = 20;
$a -= 10;
echo "El valor de 20 -= 10 es: $a <br>";

$a = 20;
$a *= 10;
echo "El valor de 20 *= 10 es: $a <br>";

$a = 20;
$a /= 10;
echo "El valor de 20 /= 10 es: $a <br>";

//Prioridad de operadores
echo "<h4>PRIORIDAD DE OPERADORES</h4>";
$resultado = 2 + 3 * 5;
echo "El valor de 2+3*5 es: $resultado <br>";

$resultado = (2 + 3) * 5;
echo "El valor de (2+3)*5 es: $resultado <br>";
?>