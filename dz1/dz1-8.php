<?php
/*
 * Используя цикл for, выведите таблицу умножения размером 10x10. Если
 * значение индекса строки и столбца чётный, то результат вывести в круглых скобках.
 * Если значение индекса строки и столбца Нечётный, то результат вывести в
 * квадратных скобках. В остальных случаях результат выводить просто числом.
 */

header('Content-Type: text/html; charset=utf-8');

echo '<table>';
for ($i =1; $i<=10; $i++) {

      echo '<tr>';

      for ($k =1; $k<=10; $k++) {
            echo '<td>';

            if ($i % 2 == 0 && $k % 2 == 0 ) {
                  echo '('. ($i * $k) .')';
            } else {
                  echo '['. ($i * $k) .']';
            }

      }
}
echo '</table>';