<?php 
include "ch6-5-1.inc";
include "ch6-5-3.inc.php";
include_once("ch6-5-2.inc");
?>

<?php
$amount = 12000;
$rate = 0.21;
$result = rateExchange($amount, $rate);
print "12000日幣兌換新台幣=". $result ."元<br/>";
?>
