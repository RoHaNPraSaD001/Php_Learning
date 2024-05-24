<?php
    $i = 1;
    echo "<table border>";
    echo "<tr><th> Multiplication table </th></tr>";
    do{
        echo "<tr><td>4 x $i = ". 4*$i ."</td></tr>";
        $i++;
    }while($i <= 10 );
    echo"</table>"
?>