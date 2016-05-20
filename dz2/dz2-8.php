<?php
/*
 * Создать 3 функции, принимающие по 1 строковому параметру и выводящие на
 * экран разные фразы с переданным параметром.
 * 2. Создать 4ю функцию, которая будет принимать 2 параметра:
 * a. целое число
 * b. строку и в зависимости от переданного числа функция должна вызвать
 * одну из трёх функций со строковым параметром (1 – первая функция, 2 –
 * вторая, 3 -третья).
 * 3. Четвёртая функция также должна обрабатывать некорректный ввод целого
числа.
 */

header('Content-Type: text/html; charset=utf-8');

 function someFunc1 ($str = 'Привет'){
        echo $str;
 }

 function someFunc2 ($str = ' Медвед '){
        echo $str;
 }

 function someFunc3 ($str = 'Добрый '){
        echo $str;
 }

 function someFunc4 ($num, $str = ''){
     $num = intval($num);
     switch ($num) {
         case 1:
            someFunc1('первая функция '.$str);
            break;
         case 2:
            someFunc2('вторая'.$str);
            break;
         case 3:
            someFunc3('третья'.$str);
            break;
         default:
            someFunc1('первая функция'.$str);
            break;
     }

 }

echo someFunc4(1, 'String');
// Выводим нормально

echo '<br>---------------<br>';
$v1 = 'someFunc'.rand(1,3).'()';
$v2 = 'someFunc'.rand(1,3).'()';
$v3 = 'someFunc'.rand(1,3).'()';
echo eval("return  $v1.$v2.$v3;");


