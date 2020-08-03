<?php 
$a = 'test';
$test = 'Hello';

echo $$a;
echo $a;

$time = strtotime("2010-12-11");
echo $final = date("Y-m-d", strtotime("+1 month", $time));