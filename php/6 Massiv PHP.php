<?php
    // Массивы
    $paper[] = 'Copier';
    $paper[] = 'Inkjet';
    $paper[] = 'Laser';

    print_r($paper);
    echo "<br>";

    for($i = 0; $i < 4; $i++)
    {
        echo $paper[$i] . "<br>";
    }

    // Ассоциативные массивы
    $paper_2['Copier'] = "Copier & Papaper";
    $paper_2['Inkjet'] = "Inkjet & Printer";
    $paper_2['Laser'] = "Laser & Printer";

    echo $paper_2["Laser"] . "<br>";

    // Присваивание с помощью ключевого слова
    $p1 = array('copyer', 'inkjet', 'laser');
    echo "Элемент массива: $p1[1]<br>";

    $p2 = array(
        "Copyier" => "Copy & Paper",
        "Inkjet" => "Inkjet & Printer",
        "Laser" => "Laser & Printer"
    );

    echo "Элемент массива: " . $p2['Laser'] . "<br>";

    // Цикл foreach...as
    foreach ($paper as $item)
    {
        echo $item . "<br>";
    }

    foreach ($paper_2 as $item => $description)
    {
        echo "item: ". $item . "    description: " . $description . "<br>";
    }

    echo "<br>";

    // while (list($item, $description) = each($paper_2))
    //     echo "item: ". $item . "    description: " . $description . "<br>";

    list($a, $b) = array('Alice', 'Bob');
    echo "a = $a b = $b";

    // Многомерные массивы
    $products = array(
        'paper' => array(
            "Copyier" => "Copy & Paper",
            "Inkjet" => "Inkjet & Printer",
            "Laser" => "Laser & Printer"
        ),
        'names' => array(
            "Primarh" => "Lion El'Jonson",
            'Car' => "Porshe",
        ),
        
    );

    echo "<pre>";

    foreach($products as $section => $items)
        foreach($items as $key => $value)
            echo "$section:\t$key\t($value)<br>";

    echo "</pre>";

    $chessboard = array(
        array('r', 'n', 'b', 'q', 'k', 'b', 'n', 'r'),
        array('p', 'p', 'p', 'p', 'p', 'p', 'p', 'p'),
        array(' ', ' ', ' ', ' ', ' ', ' ', ' ', ' '),
        array(' ', ' ', ' ', ' ', ' ', ' ', ' ', ' '),
        array(' ', ' ', ' ', ' ', ' ', ' ', ' ', ' '),
        array(' ', ' ', ' ', ' ', ' ', ' ', ' ', ' '),
        array('P', 'P', 'P', 'P', 'P', 'P', 'P', 'P'),
        array('R', 'N', 'B', 'Q', 'K', 'B', 'N', 'R')
    );

    echo "<pre>";
    foreach ($chessboard as $row)
    {
        foreach ($row as $piece)
            echo "$piece ";
        echo "<br>";
    }
    echo "</pre>";

    // Использование функций для работы с массивами
    // is_array
    echo (is_array($fred)) ? "Это массив <br>" : "Это не массив <br>";

    // Count
    echo "Count: " . count($paper_2) . "<br>";

    // Sort
    $mas = array('v', 'r', 'f', 'a', 't', 'i', 'e', 'd', 'b', 'z');
    sort($mas, SORT_STRING);
    foreach ($mas as $item)
    {
        echo $item . " ";
    }
    echo "<br>";

    // Shuffle
    shuffle($mas);
    foreach ($mas as $item)
    {
        echo $item . " ";
    }
    echo "<br>";

    // Explode
    $ip = explode('.', "192.168.234.176");
    print_r($ip);
    echo "<br>";

    // Extract
    // Comapact
    $fname = "Doctor";
    $sname = "Who";
    $planet = "Gallifrey";
    $system = "Gridlock";
    $constellation = "Kasterborous";
    $contact = compact('fname', 'sname', 'planet', 'system', 'constellation');
    print_r($contact);
    echo "<br>";

    // Reset
    /*
    Когда с помощью конструкции foreach...as или функции each
    осуществляется последовательный перебор элементов массива, 
    они перемещают внутренний указатель PHP, который показывает, 
    какой из элементов массива нужно извлечь в следующий раз. 
    Если коду программы понадобится вернуться к началу массива, то
    можно воспользоваться функцией reset
    */
    reset($fred); // Отбрасывание возвращаемого значения
    $item = reset($fred); // Сохранение первого элемента массива
    
    // End
    /*
    Можно также переместить внутренний указатель элемента массива PHP
    на последний элемент, воспользовавшись для этого функцией end
    */
    end($fred);
    $item = end($fred);

?>  