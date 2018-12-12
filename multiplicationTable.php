<h1>Multiplication Table</h1>
<table>
    <tr>
        <?php
            for($i=1; $i<=12; $i++){
                for($j=0; $j<=12; $j++){
                    if($j==0){
                        echo "<tr>";
                    }elseif($i==1 || $j==1){
                        echo "<th>" . ($i * $j) . "</th>";
                    }elseif(0 < $j && $j < 13){
                        echo "<td>" . ($i * $j) . "</td>";
                    }elseif($j==12){
                        echo "</tr>";
                    } //end of last elseif and entire if
                } //end of for j
            }//end of for i
        ?>
    </tr>
</table>
