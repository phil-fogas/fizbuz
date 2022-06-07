<?php

declare(strict_types=1);

//fizzbuz en une function
function fizzbuz($liste)
{
  foreach ($liste as $a) {
    if ($a % 3 == 0 && $a % 5 == 0) {
      echo 'Fizzbuzz<br>';
    } elseif ($a % 3 == 0) {
      echo 'Fizz<br>';
    } elseif ($a % 5 == 0) {
      echo 'Buz<br>';
    } else {
      echo $a . '<br>';
    }
  }
}
echo 'version fizzbuz <br>';
fizzbuz([1, 2, 3, 5, 15, 20, 30, 45]);

//fizzbuzz en une function un peu plus securise
function fizzbuzz(array $liste)
{
  foreach ($liste as $a) {
    if (empty($a % 3) && empty($a % 5)) {
      echo 'Fizzbuzz<br>';
    } elseif (empty($a % 3)) {
      echo 'Fizz<br>';
    } elseif (empty($a % 5)) {
      echo 'Buz<br>';
    } else {
      echo $a . '<br>';
    }
  }
}
echo 'version fizzbuzz <br>';
fizzbuzz([1, 2, 3, 5, 15, 20, 30, 45]);

//fizzbuzz en deux function
function isDivision(int $nombre, int $divideur)
{
  return ($nombre % $divideur === 0);
}

function fizbuz(array $liste)
{
  foreach ($liste as $a) {
    if (isDivision($a, 3) && isDivision($a, 5)) {
      echo 'Fizzbuzz<br>';
    } elseif (isDivision($a, 3)) {
      echo 'Fizz<br>';
    } elseif (isDivision($a, 5)) {
      echo 'Buz<br>';
    } else {
      echo $a . '<br>';
    }
  }
}
echo '<br>version fizbuz <br>';
fizbuz([1, 2, 3, 5, 15, 20, 30, 45]);

//version en class
class Fiz
{
  private function isDiv(int $number, int $divident): bool
  {
    return ($number % $divident === 0);
  }

  public function fibuz(array $liste): void
  {
    foreach ($liste as $a) {
      if ($this->isDiv((int)$a, 3) && $this->isDiv((int)$a, 5)) {
        echo 'Fizzbuzz<br>';
      } elseif ($this->isDiv((int)$a, 3)) {
        echo 'Fizz<br>';
      } elseif ($this->isDiv((int)$a, 5)) {
        echo 'Buz<br>';
      } else {
        echo $a . '<br>';
      }
    }
  }
}

echo '<br>version class fizbuz <br>';
$fiz = new Fiz;
$buz = $fiz->fibuz([1, 2, 3, 5, 15, 20, 30, 45]);
