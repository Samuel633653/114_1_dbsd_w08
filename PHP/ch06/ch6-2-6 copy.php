<?php
function volume($length, $width=10, $heigth=15){
   print $length."X". $width."X". $heigth."=";
   return $length * $width * $heigth;
}
$l = 15;   $w = 20;   $h = 25;
$func="volume";
print "盒子體積: ".$func($l, $w, $h)."<br/>";
print "盒子體積: ".$func($l, $w)."<br/>";


?>