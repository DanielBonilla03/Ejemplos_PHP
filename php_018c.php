<?php 
$a = 25;
$b = 20;

if ($a > $b) {
    print($a." :A es mayor que B ");
}else{
    if($a < $b){
        print($b." :Es mayor que A");
    }else{
        print("A y B son iguales y su valor es: ".$a);
    }
}

echo "<br><br><br>";

// Con elseif
if($a > $b){
    print("A es mayor que B y sale: ".$a);
}elseif ($a < $b){
    print("B es mayor que A y vale: ".$b);
}else{
    print("A y B son iguales".$b);
}



?>