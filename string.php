<?php 
    $text = "Hello Word!";
    echo strlen($text);
    echo("\n");
    echo str_word_count($text);
    echo("\n");
    echo strrev($text);
    echo("\n");
    echo strpos($text,"Word");
    echo("\n");
    echo str_replace("Word","Trum",$text);
?>