<?php
/*
 * Создайте 5 переменных с разными скалярными типами и присвойте им
 * произвольные значения. Затем создайте переменные: $name, $age, $city, $job и
 * присвойте им соответствующие данные. $job – логическая (да/нет). Есть работа? С
 * помощью echo выведите все переменные в удобочитаемом виде.
 */

header('Content-Type: text/html; charset=utf-8');

$boolTrue = true;
$boolFalse = false;
$int = 25;
$real = 2.3;
$string = 'Петро';
$array = array (4, 5);

$name = $string;
$age = $int;
$city = 'Москва';
$job = true;

echo  $name . ', (' . $age .' лет), из г. ' . $city  .'. ';
if ($job == $boolTrue) {
    echo " Работающий. ";
} else {
    echo " Безработный";
}