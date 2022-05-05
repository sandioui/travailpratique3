<html>
    <body>
        <table border=1px>
        <?php
            //Fonction date_default_timezone_set prise sur Stack Overflow
            date_default_timezone_set('America/Montreal');

            $time = time();
            $hour = date('h', $time);
            $minute = date('i', $time);

            if ($hour[0] == 0){
                $hour = $hour[1];
            }
            if ($minute[0] == 0){
                $minute = $minute[1];
                echo"caca $minute";
            }

            for ($i = 1; $i <= 60; $i++) {
                echo "<tr>";
                for ($j = 1; $j <= 12; $j++) {
                    if ($j == $hour && $i == $minute){
                        echo "<td>X</td>";
                    }

                    else {
                        echo "<td>$i</td>";
                    }
                }
                echo "</tr>";


            }


        ?>

        </table>
        
    </body>
</html>