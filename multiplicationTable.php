<h1>Multiplication Table</h1>
<table>
        <?php
        $max = 20;
            for($i=0; $i<=$max; $i++){
                for($j=0; $j<=$max; $j++){
                    if($i==0 && $j==0){
                        echo '<tr><th>&nbsp;</th>';;
                    }
                    if($i==0 && $j>0){
                        echo '<th>' . ($j) . '</th>';
                    }
                    if($i>0 && $j==0){
                        echo '<th>' . $i . '</th>';
                    }
                    if($i>0 && $j>0){
                        echo '<td>' . ($i * $j) . '</td>';
                    }
                    if($j==$max){
                        echo '</tr>';
                    }
                } //end of for j
            }//end of for i
        ?>
</table>
