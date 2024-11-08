
<?php 
for ($i = 1; $i <=10; $i++){
    echo "<table style='border: 2px solid green; padding: 5px; border-collapse: collapse; margin: 3px auto;'>";
        echo "<tr>";
            echo "<th colspan = '5'>Tabla del $i</th>";
        echo "</tr>";
    for ($j = 1; $j <= 10; $j++){
        $res = $i * $j;
        echo "<tr>";
                echo "<td table style='border: 1px solid green; padding: 5px;'>$i</td>";
                echo "<td style='border: 1px solid green; padding: 5px;'>x</td>";
                echo "<td style='border: 1px solid green; padding: 5px;'>$j</td>";
                echo "<td style='border: 1px solid green; padding: 5px;'>=</td>";
                echo "<td style='border: 1px solid green; padding: 5px;'>$res</td>";
        echo" </tr>";
    }
    echo "</table><br>";
}



?>