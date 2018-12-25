
<!DOCTYPE>
<html>
    <body>
    <?php
        $t = date ("H");

        if ($t < "10") {
            echo "Xin chao Ongtrum";
        }elseif ($t < "20") {
            echo "Xin chao trumtintac";
        }else { 
            echo "Happy Hour";
        }
    ?>
    </body>
</html>