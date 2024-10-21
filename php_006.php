<?php  
    //define("CIUDAD", "MADRID");//Define una variable que se llama ciudad que tiene el valor Madrid.
    if(defined ("CIUDAD")){
        print("La ciudad es:" . CIUDAD);
    } else{
        print("La constante ciudad no está definida");
    }
?>