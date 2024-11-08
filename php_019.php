<?php 
//OPERADORES DE COMPARACIÓN
//Son usados en la condición de las estructuras condicionales.
// == : igual
// ! : diferente
// > ; < ; >= ; <=
$nota = 7;

if($nota >= 0 && $nota < 5){
    echo "la nota $nota es supenso";
}elseif($nota >= 5 && $nota < 6){
    echo "la nota $nota es suficiente";
}elseif($nota >= 6 && $nota < 7){
    echo "la nota $nota es bien";
}elseif($nota >= 7 && $nota < 9){
    echo "la nota $nota es notable";
}else{
    echo "la nota $nota es sobresaliente";
}

?>