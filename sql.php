<?php

$sqlround = "SELECT CASE 
WHEN `number`/3=ROUND(`number`/3) AND `number`/5=ROUND(`number`/5) THEN 'FizBuzz' 
WHEN `number`/3= ROUND(`number`/3) THEN 'Fiz' 
WHEN `number`/5=ROUND(`number`/5) THEN 'Buzz' 
ELSE `number` END AS 'fizbuz' 
FROM `fix`;";



$sqlmo = "SELECT CASE 
WHEN MOD(`number`, 5) = 0 AND mod(`number`, 3) = 0 THEN 'Fizz Buzz' 
WHEN MOD(`number`,  5) = 0 THEN 'Buzz' 
WHEN MOD(`number`,  3) = 0 THEN 'Fizz' 
ELSE `number` END AS fiz 
FROM fix;";

$sqlmp = "SELECT CASE 
WHEN `number` % 5 = 0 AND `number` % 3 = 0 THEN 'fizzbuzz'
WHEN `number` % 5 = 0 THEN 'buzz'
WHEN `number` % 3 = 0 THEN 'fizz'
ELSE `number` END AS fiz
FROM fix;";
