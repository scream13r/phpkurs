<?php
/*
 * Создать ассоциативный массив $cars. Данные взять из задания №6. Требуется,
 * чтобы все данные были в одном массиве. Реализовать через вложенные массивы.
 * Вывести массив в удобочитаемом виде через конструкцию print_r и через foreach.

 */

header('Content-Type: text/html; charset=utf-8');

$bmw = array(
    'model' => 'X5',
    'speed' => '120',
    'doors' => '5',
    'year' => '2015'
);

$toyota = array(
    'model' => 'Supra',
    'speed' => '220',
    'doors' => '2',
    'year' => '1997'
);

$opel = array(
    'model' => 'OPC',
    'speed' => '210',
    'doors' => '2',
    'year' => '2011'
);

$cars = array (
    'bmw' => $bmw,
    'toyota' => $toyota,
    'opel' => $opel
);

echo '<pre>';
print_r($cars);
echo '</pre>';
foreach ($cars as $marka=>$paramArray) {
   echo $marka . '<br>------<br>';
   foreach ($paramArray as $param=>$value) {
      echo $param . ':' . $value . '<br>';
   }
}