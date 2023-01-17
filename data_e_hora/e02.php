<?php

$ts =strtotime("2001-09-11"); //string to timestamp

echo date ("l, d/m/Y", $ts); // pega a data do timestamp

$ts = strtotime("+30 day"); //ele aceita expressões
echo "<br>";
echo date ("l, d/m/Y", $ts);

$ts = strtotime("now");
$ts = strtotime("-40 day");