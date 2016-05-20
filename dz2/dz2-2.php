<?php
/*
 * Функция должна принимать 2 параметра: а) массив чисел; б) строку,
 * обозначающую арифметическое действие, которое нужно выполнить со всеми
 * элементами массива. Функция должна вывести результат.
 * Например: имя функции someFunction(array(1,2,3,4), ‘ – ’);
 * Результат: 1 – 2 – 3 – 4 = 8
 * Дополнительно (не обязательно): Написать все, на Ваш взгляд, требуемые
 * проверки. Сделать по умолчанию любую арифметическую операцию. И сделать
 * возможность приём не только одного арифметического действия, но и массив
 * действий. И сколько заданных действий будет, столько и должно быть выведено
 * результатов.
 */

header('Content-Type: text/html; charset=utf-8');


$str = '/';
$mainArray = array(1,2,3,4,5,1);

function someFunction ($mainArray, $str) {

    $resultText = implode ($str, $mainArray);
    $result = eval("return $resultText;");
    echo $resultText. " = ". $result;
}

function someFunction2 ($mainArray, $str) {

    // Проверки
   $testIsInt = array_map("isInt", $mainArray);
   $testIsArifm =isArifm($str);
   if (in_array(0, $mainArray) && $str == '/') { echo "Внимание! На ноль делить нельзя"; exit(); }

    // Действия
    if (!in_array(0, $testIsInt) && $testIsArifm == 1){

            $resultText = implode ($str, $mainArray);
            $result = eval("return $resultText;");
            echo $resultText. " = ". $result;

    }

}

function someFunction3 ($mainArray, $str) {

    // Этот доп не стал делать:
     /* возможность приём не только одного арифметического действия, но и массив
     * действий. И сколько заданных действий будет, столько и должно быть выведено
     * результатов.
      *
      * Решение: просто через дополнительный foreach делаем вывод. Обходим все значения в $str и далее как в функции  someFunction2.
      * Проверки так же нужны для массива $str
    */
}

function isInt($int) {

    if (!is_int($int)) {
        echo 'Ошибка! В массиве не все числа<br>';
        return 0;
        exit();
    }

    return 1;
}

function isArifm($str) {
    $arifmArr = array('+', '-', '/', '*', '^');

    if (!in_array($str, $arifmArr)) {
        echo 'Ошибка! Неверное арифметическое действие.';
        return 0;
    }

    return 1;
}
// Выводим нормально
echo someFunction ($mainArray, $str);

echo '<br>---------------<br>';
// Дополнительно
echo someFunction2 ($mainArray, $str);