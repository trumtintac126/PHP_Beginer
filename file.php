<?php
    $path = "C:\TestFile\abc.txt";
    $myfile = fopen($path, "w")  or die("Unable to open file!");
    $txt = "hello\n";
    fwrite($myfile,$txt);
    $txt = "trumtintac\n";
    fwrite($myfile,$txt);
    fclose($myfile);
?>