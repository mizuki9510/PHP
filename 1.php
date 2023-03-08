<?php
$total ;
$tax = 1.2;
$hamburger = 4.95;
$shake = 1.5;
$coke = 1.0;
$total = ($hamburger*2 + $shake + $coke) * $tax;
print "the cost is {$total}";
?>