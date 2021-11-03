<?php
    // Выражения
    $y = 3 * (abs(2 * $x) + 4);

    // TRUE или FALSE
    echo "a: [" . TRUE . "]<br>"; // a: [1]
    echo "b: [" . FALSE . "]<br>"; // b: []

    echo "a: [" . (20 > 9) . "]<br>"; // a: [1]
    echo "b: [" . (5 == 6) . "]<br>"; // b: []
    echo "c: [" . (1 == 0) . "]<br>"; // c: []
    echo "d: [" . (1 == 1) . "]<br>"; // d: [1]

    // Литералы и переменные
    $my_name = "Alex";
    $my_age = 23;
    echo "a: [" . 73 . "]<br>"; // Числовой литерал
    echo "b: [" . "Hello" . "]<br>"; // Строковый литерал
    echo "c: [" . FALSE . "]<br>"; // Литерал константы
    echo "d: [" . $my_name . "]<br>"; // Строковая переменная
    echo "e: [" . $my_age . "]<br>"; // Числовая переменная

    $days_to_new_year = 366 - $day_number; // Выражение

    if ($days_to_new_year < 30)
    {
        echo "Скоро новый год<br>"; // Инструкция
    }

    // Операторы равенства
    $a = 1000;
    $b = "+1000";

    if ($a == $b) echo "1<br>"; // 1
    if ($a === $b) echo "2<br>"; // Ничего не выведет

    if ($a != $b) echo "1<br>"; // Ничего не выведет
    if ($a !== $b) echo "2<br>"; // 2

    // Логические операторы
    $a = 2; $b = 3;

    echo ($a AND $b) . "<br>"; // NULL
    echo ($a or $b) . "<br>"; // 1
    echo ($a XOR $b) . "<br>"; // 1
    echo !$a . "<br>"; // NULL

    // Условия 
    $bank_balance = 99;

    if ($bank_balance < 100)
    {
        $money = 1000;
        $bank_balance += $money;
    } 
    else 
    {
        $savings += 50;
        $bank_balance -= $savings;
    }

    if ($bank_balance < 100)
    {
        $money = 1000;
        $bank_balance += $money;
    }
    elseif ($bank_balance > 200)
    {
        $savings += 100;
        $bank_balance -= 100;
    }
    else
    {
        $savings += 50;
        $bank_balance -= 50;
    }
    echo "balance = $bank_balance<br>";

    $page = "News";

    switch ($page) 
    {
        case "Home":
            echo "page at Home<br>";
            break;
        case "About":
            echo "page at About<br>";
            break;
        case "News":
            echo "page at News<br>";
            break;
        default:
            echo "ass<br>";
            break;
    }

    echo $fuel <= 1 ? "Требуется дозаправка<br>" : "Топлива еще достаточно<br>";

    $enough = $fuel <= 1 ? FALSE : TRUE;

    // Организация циклов
    echo "<br>";
    $fuel = 10;
    while ($fuel > 10)
    {
        // продолжение поездки...
        echo "топлива еще достаточно";
    }

    echo "<br>";
    $count = 0;
    while (++$count < 4)
    {
        echo "Число $count, умноженное на 12 равно " . $count * 12 . "<br>"; 
    }

    echo "<br>";
    $count = 1;
    do
    {
        echo "Число $count, умноженное на 12 равно " . $count * 12 . "<br>"; 
    } while (++$count < 4);
    
    echo "<br>";
    for ($count = 1; $count < 4; ++$count)
    {
        echo "Число $count, умноженное на 12 равно " . $count * 12 . "<br>"; 
        // break;
        // continue;
    }

    // Неявное и явное преобразование типов
    $a = 12;
    $b = 56;
    $c = $b / $a; // 4.6666666666667
    echo "$c<br>";

    $c = (int) ($b / $a); // 4
    echo "$c<br>";
?>