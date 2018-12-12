<h1>Multiplication Table</h1>
<table>
        <?php
            echo '<tr><th>&nbsp;</th>';
            for($i=1; $i<=12; $i++){
                for($j=1; $j<=12; $j++){
                    if($i==1){
                        echo '<th>' . ($i * $j) . '</th>';
                    }
                    if($i!=1 && $j==1){
                        echo '<th>' . ($i-1) . '</th>';
                    }
                    if($i>1){
                        echo '<td>' . ($i * $j) . '</td>';
                    }
                    if($j==12){
                        echo '</tr>';
                    }//end of iff
                } //end of for j
            }//end of for i
        ?>
</table>
