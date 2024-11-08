<?php 
//BUCLE FOR
//BUCLE: estructura de programacion que se usa para repetir un determinado código un número determinado de veces.
//FOR: bucle que conocemos de antemano el numero de veces que quiero repetir la acción.
//FOR lleva implicito tres parámetros: la inicialización, la condición y el incremento o decremento.
    //for (inicialización; condición; incremento o decremento){
        //bloque código    
    //}

    for($i = 1; $i <= 100; $i++){
        echo $i. "";
    }
    echo "<br><br>";
    //Imprimir del 1 al 100
for($i = 1; $i <= 100; $i++){
    $msg = ($i == 100) ? "$i.":"$i,";
    echo $msg;
}
?>