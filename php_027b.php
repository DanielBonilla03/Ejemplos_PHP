<?php 
echo "<style>
    .table_container{
        border: 2px solid green; 
        padding: 5px; 
        border-collapse: collapse; 
        margin: 3px auto;    
        }

    .cell{
        border: 1px solid green; 
        padding: 5px; 
        }
    </style>";



for ($i = 1; $i <=10; $i++){
    echo "<table class='table_container'>";
        echo "<tr>";
            echo "<th colspan = '5'>Tabla del $i</th>";
        echo "</tr>";
    for ($j = 1; $j <= 10; $j++){
        $res = $i * $j;
        echo "<tr>";
                echo "<td class = 'cell'>$i</td>";
                echo "<td class = 'cell'>x</td>";
                echo "<td class = 'cell'>$j</td>";
                echo "<td class = 'cell'>=</td>";
                echo "<td class = 'cell'>$res</td>";
        echo" </tr>";
    }
    echo "</table><br>";
}
?>