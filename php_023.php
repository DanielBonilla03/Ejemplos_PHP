<?php 
//Transformamos el siguiente FOR en un bucle while.
//While tiene la conciciób antes de entrar en el bucle, por lo tanto CUIDADO, puede que nunca se llegue a entrar. While es un bucle que se ejcuta mientras se cumpla una condición. No lleva inicialización, por lo tanto hay que 

// for($i = 1; $i <= 100; $i++){
//     echo $i." ";
// }
$i = 1;
while($i <= 100){
    echo $i." ";
    $i++;
}
echo "<br>";

//DO ... WHILE: la condición se ejecuta al final. CUIDADO, al menos se ejecuta una vez el bucle.
echo "CON BUCLE DO: <br>";
$j = 1;
do{
    echo $j." ";
    $j++;
}while($j <= 100);
?>