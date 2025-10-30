SID:C112181104
<BR>
NAME:何昇輔
<p>
<?php
$scores = array(22, 16, 30, 24);
$total = 0;
foreach ($scores as $element){
   echo "$element |";
   $total += $element;
}

echo "<BR>$total<BR>";
print_r(value: $scores);
?>