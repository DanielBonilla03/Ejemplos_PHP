<?php 
$a = 5; // es true por defectoo porque es distinta de 0
$b = 0; // esta es falso
$c = 10; // verdadero

//Operadores lógicos

//TRUE equivale a 1 y FALSE equivale a 0

//AND (&& o and): devuelve TRUE si ambas expresiones son verdaderas. 

echo "AND lógico (&&): <br>";
//echo (int)($a && $b)."<br>";
//echo ($a && $c)."<br>";

if ($a && $b == 0) {
    echo "Es falso";
} else{
    echo "Es verdadero";
}
echo "<br>";

$resultado = ($a && $b) ? "Es falso" : "Es falso";
    echo "$resultado";
    echo "<br><br><br>";


//OR (|| o or): devuelve TRUE si al menos una de las expresiones es verdadera.
echo "OR lógico (||): <br>";
echo ($a || $b)."<br>";
echo ($a || $c)."<br>";
echo (int)($b || $c)."<br><br><br>";


//NOT (!): invierte el valor lógico de una expresión. Si es verdadero. la negación me va a dar falso.
echo "NOT lógico (!): "."<br>";
echo (int)!$a."<br>";


//AND lógico (&&): devuelve TRUE si ambas expresiones son verdaderas.


 
?>