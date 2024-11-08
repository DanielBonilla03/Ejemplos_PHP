<?php 
//if normal y con operador ternario.
$a = 8;
$b = 5;
if($a > $b){
    echo "$a es mayor que $b"."<br><br>";
}

//if con operador ternario
    $resultado = ($a > $b) ? "$a es mayor que $b (CON TERNARIO)" : "";
    echo "$resultado";
?>