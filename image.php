<?php
$img_array = glob("images/*.{gif,jpg,png}",GLOB_BRACE); 
$img = array_rand($img_array); 
$dz = $img_array[$img];
?>

