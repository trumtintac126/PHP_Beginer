<!DOCTYPE>
<html>
    <body>
        <?php 
            echo "<h2>Vi du 1</h2>";
            $cars = array (
                array("Toyota",22,18),
                array("Mec",25,18),
                array("For",20,18)
            );

            echo $cars[0][0] . "in Stock:" .$cars[0][1] . "sold" .$cars[0][2] . "<br>";
            echo $cars[1][0] . "in Stock:" .$cars[1][1] . "sold" .$cars[1][2] . "<br>";
            echo $cars[2][0] . "in Stock:" .$cars[2][1] . "sold" .$cars[0][2] . "<br>";

            echo "<h2>For loop</h2>";
            for($row =0; $row<3; $row ++){
                echo "<p><b>Row number $row</b></p>";
                echo "<ul>";
                    for($col=0; $col<3; $col++){
                        echo "<li>".$cars[$row][$col]."</li>";  
                    }
                echo "</ul>";
            }
        ?>
    </body>
</html>