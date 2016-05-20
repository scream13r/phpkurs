<?php
/*
 * Функция должна принимать в качестве аргумента массив чисел и возвращать так
 * же массив, но отсортированный по возрастанию. Системные функции сортировки не
 * использовать.
 * Пример: В функцию передали [1, 22, 5, 66, 3, 57]. Вернула: [1, 3, 5, 22, 57, 66]
 *
 */

header('Content-Type: text/html; charset=utf-8');

 function someFunction($arraz){

     while($arraz) {

            $min = min($arraz);
            $key = array_search($min, $arraz);
            unset($arraz[$key]);
            $arr[] = $min;

        }

     return $arr;
 }


// Выводим нормально
$newArr = someFunction (array(5,2,9,4,3,8));
var_dump($newArr);
