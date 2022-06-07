<?php

declare(strict_types=1);


$liste = [1, 2, 3, 5, 15, 20, 30, 45, 10, 25, 90, 9, 7, 14, 22];

//fizzbuz en une function round
function fibuz($liste)
{
  foreach ($liste as $a) {
    if ($a / 3 == round($a / 3) && $a / 5 == round($a / 5)) {
      echo 'r-Fizzbuzz <br> ';
    } elseif ($a / 3 == round($a / 3)) {
      echo 'r-Fizz <br> ';
    } elseif ($a / 5 == round($a / 5)) {
      echo 'r-Buz <br> ';
    } else {
      echo $a . ' <br> ';
    }
  }
}
echo '<br>version fizzbuz round  <br> ';
fibuz($liste);

//fizzbuz en une function % reste division
function fizzbuz($liste)
{
  foreach ($liste as $a) {
    if ($a % 3 == 0 && $a % 5 == 0) {
      echo '%-Fizzbuzz <br> ';
    } elseif ($a % 3 == 0) {
      echo '%-Fizz <br> ';
    } elseif ($a % 5 == 0) {
      echo '%-Buz <br> ';
    } else {
      echo $a . ' <br> ';
    }
  }
}
echo '<br>version fizzbuz % <br> ';
fizzbuz($liste);

//fizzbuzz en une function un peu plus securise
function fizzbuzz(array $liste)
{
  foreach ($liste as $a) {
    if (empty($a % 3) && empty($a % 5)) {
      echo 's-Fizzbuzz <br> ';
    } elseif (empty($a % 3)) {
      echo 's-Fizz <br> ';
    } elseif (empty($a % 5)) {
      echo 's-Buz <br> ';
    } else {
      echo $a . ' <br> ';
    }
  }
}
echo '<br>version fizzbuzz s <br> ';
fizzbuzz($liste);

//fizzbuzz en deux function
function isDivision(int $nombre, int $divideur)
{
  return ($nombre % $divideur === 0);
}

function fizbuz(array $liste)
{
  foreach ($liste as $a) {
    if (isDivision($a, 3) && isDivision($a, 5)) {
      echo 'd-Fizzbuzz <br> ';
    } elseif (isDivision($a, 3)) {
      echo 'd-Fizz <br> ';
    } elseif (isDivision($a, 5)) {
      echo 'd-Buz <br> ';
    } else {
      echo $a . ' <br> ';
    }
  }
}
echo ' <br> version fizbuz d <br> ';
fizbuz($liste);

//version en class
class Fiz
{
  public $liste;

  private function isDiv(int $number, int $divident): bool
  {
    return ($number % $divident === 0);
  }

  public function fibuz(array $liste): void
  {
    foreach ($liste as $a) {
      if ($this->isDiv((int)$a, 3) && $this->isDiv((int)$a, 5)) {
        echo 'c-Fizzbuzz <br> ';
      } elseif ($this->isDiv((int)$a, 3)) {
        echo 'c-Fizz <br> ';
      } elseif ($this->isDiv((int)$a, 5)) {
        echo 'c-Buz <br> ';
      } else {
        echo $a . ' <br> ';
      }
    }
  }
}

echo ' <br> version class fizbuz  <br> ';
$fiz = new Fiz;
$buz = $fiz->fibuz($liste);


//version en class fluent
class Fizf
{
  /**
   * @var array
   */
  public $liste;

  /**
   * Get the value of liste
   *
   * @return  array
   */
  public function getListe()
  {
    return $this->liste;
  }

  /**
   * Set the value of liste
   *
   * @param  array  $liste
   *
   * @return  self
   */
  public function setListe(array $liste)
  {
    $this->liste = $liste;

    return $this;
  }

  /**
   * isDiv
   *
   * @param  int $number
   * @param  int $divident
   * @return bool
   */
  private function isDiv(int $number, int $divident): bool
  {
    return ($number % $divident === 0);
  }

  /**
   * fibuz8
   *
   * @param  array $liste
   * @return void
   */
  public function fibuzf(): void
  {
    foreach ($this->liste as $a) {
      if ($this->isDiv((int)$a, 3) && $this->isDiv((int)$a, 5)) {
        echo 'f-Fizzbuzz <br> ';
      } elseif ($this->isDiv((int)$a, 3)) {
        echo 'f-Fizz <br> ';
      } elseif ($this->isDiv((int)$a, 5)) {
        echo 'f-Buz <br> ';
      } else {
        echo $a . ' <br> ';
      }
    }
  }
}

echo ' <br> version class fizbuz f <br> ';
$fizf = new Fizf;
$fizf->setListe($liste)->fibuzf();


//version en class fluent+try cach
class Fizct
{
  /**
   * @var array
   */
  public $liste;

  /**
   * Get the value of liste
   *
   * @return  array
   */
  public function getListe()
  {
    return $this->liste;
  }

  /**
   * Set the value of liste
   *
   * @param  array  $liste
   *
   * @return  self
   */
  public function setListe(array $liste)
  {
    if (is_array($liste)) {
      $this->liste = $liste;
    } else {
      throw new Exception("liste pas valid");
    }


    return $this;
  }

  /**
   * isDiv
   *
   * @param  int $number
   * @param  int $divident
   * @return bool
   */
  private function isDiv(int $number, int $divident): bool
  {
    if (empty($number)) {
      throw new Exception("number pas valid");
    }
    if (empty($divident)) {
      throw new Exception("divident pas valid");
    }
    return ($number % $divident === 0);
  }

  /**
   * fibuz8
   *
   * @param  array $liste
   * @return void
   */
  public function fibuzct(): void
  {
    if (!empty($this->liste)) {
      foreach ($this->liste as $a) {
        if ($this->isDiv((int)$a, 3) && $this->isDiv((int)$a, 5)) {
          echo 'ft-Fizzbuzz <br> ';
        } elseif ($this->isDiv((int)$a, 3)) {
          echo 'ft-Fizz <br> ';
        } elseif ($this->isDiv((int)$a, 5)) {
          echo 'ft-Buz <br> ';
        } else {
          echo $a . ' <br> ';
        }
      }
    } else {
      throw new Exception("liste non presente");
    }
  }
}
echo ' <br> version class fizbuz ft <br> ';
try {

  $fizct = new Fizct;
  $fizct->setListe($liste)->fibuzct();
} catch (Exception $e) {
  echo '<br>Message d\'erreur : ' . $e->getMessage();
  echo '<br>Fichier :'.$e->getFile();
  echo '<br>Line : '.$e->getLine();
}
