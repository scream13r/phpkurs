<?php
/*
 * Создайте массив $bmw с ячейками: model, speed, doors, year. Заполните ячейки
 * значениями соответственно: “X5”, 120, 5, “2015”. Создайте массивы $toyota и $opel
 * аналогичные массиву $bmw (заполните данными).
 * Выведите значения всех трёх массивов в виде:
 * Модель: model
 * Скорость: speed
 * Двери: doors
 * Год выпуска: year
 * Например:
 * Модель: X5
 * Скорость: 120
 * Двери: 5
 * Год выпуска: 2015
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

echo 'Модель:' . $bmw['model'] . '<br>';
echo 'Скорость:' . $bmw['speed'] . '<br>';
echo 'Двери:' . $bmw['doors'] . '<br>';
echo ' Год выпуска:' . $bmw['year'] . '<br>';
echo '--------<br>';
echo 'Модель:' . $toyota['model'] . '<br>';
echo 'Скорость:' . $toyota['speed'] . '<br>';
echo 'Двери:' . $toyota['doors'] . '<br>';
echo ' Год выпуска:' . $toyota['year'] . '<br>';
echo '--------<br>';
echo 'Модель:' . $opel['model'] . '<br>';
echo 'Скорость:' . $opel['speed'] . '<br>';
echo 'Двери:' . $opel['doors'] . '<br>';
echo ' Год выпуска:' . $opel['year'] . '<br>';