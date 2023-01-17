<?php
// null coalesce   ??

$a = null;

$b = null;

$c = 10;

echo $a ?? $b ?? $c; // mostre $a, se for nulo, mostre $b, se for nulo, motre $c

echo "<br>";

$a = null;

$b = 5;

$c = 10;

echo $a ?? $b ?? $c;


?>