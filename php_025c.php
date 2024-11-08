<?php
$salir = false;
//WHILE SE EJECUTA MIENTRAS SU EXPRESIÓN SEA VERDADERA.
//POR ELLO WHILE(!$SALIR) SE EJECUTA, PORQUE ES TRUE
//PERO WHILE($SALIR) NO SE EJECUTA PORQUE ES FALSE.
while (!$salir) {//PODRIA HABER PUESTO (WHILE (SALIR == FALSE))
    $num = rand(1,500);
    echo "$num <br>";
    $salir = ($num % 7 == 0);//El centinela vale verdadero si es múltiplo de 7.
}
?>