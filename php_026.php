Hacer un programa que muestre las tablas de multiplicar. Debe haber un emcabezado h3 como título de cada tabla (html dentro de php: echo "<h3>")
Si quiero insertar html dentro de php uso echo o print.
----Bucles anidados: Un FOR dentro de otro FOR----
<?php 
for ($i = 1; $i <= 10; $i++ ){
    echo "<h3>Tabla del $i</h3>";
    for ($j = 1; $j <= 10; $j++ ){
        $resultado = $i*$j;
        echo "$i x $j = $resultado <br>";
    }
}
?>