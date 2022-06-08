<?php

$sql = "SELECT CASE WHEN `number`/3=ROUND(`number`/3) AND `number`/5=ROUND(`number`/5) THEN 'FizBuzz' WHEN `number`/3= ROUND(`number`/3) THEN 'Fiz' WHEN `number`/5=ROUND(`number`/5) THEN 'Buzz' ELSE `number` END AS 'fizbuz' FROM `fix`;";
