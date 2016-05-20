<?php
/*
 * Функция должна принимать переменное число аргументов, но первым
 * аргументом обязательно должна быть строка, обозначающая арифметическое
 * действие, которое необходимо выполнить со всеми передаваемыми аргументами.
 * Остальные аргументы целые и/или вещественные.
 * Например: имя функции someFunction(‘+’, 1, 2, 3, 5.2);
 * Результат: 1 + 2 + 3 + 5.2 = 11.2
 * Дополнительно (не обязательно): Задание взять из Задачи №2.
 *
 */

header('Content-Type: text/html; charset=utf-8');

 function someFunction(){

     $mainArr = func_get_args();
	 $mainStingOnlyNumbers = $mainArr;
     array_shift($mainStingOnlyNumbers);

     $resultText = implode ($mainArr[0], $mainStingOnlyNumbers);
     $result = eval("return $resultText;");
     echo $resultText. " = ". $result;

 }

// Выводим нормально
echo someFunction ('+', 1,2,3,4,5);

