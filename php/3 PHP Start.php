<?php
    //Синтаксис
    echo "hello\n";
    $my_counter = 1;
    $usrname = 'Alex';
    $my_array = array("one", "two");
    echo $usrname;
?>

<?php 
    $user = $usrname;
    echo "<br>";
    echo $user;
    $count = 7;
    $count = 17.6;
    echo $count;
    echo '<br>';
    echo $my_array[1];
?>

<?php
    //Массив
    $oxo = array(
        array('x', ' ', 'o'),
        array('o', 'o', 'x'),
        array('x', 'o', ' '));
    echo $oxo[1][2];
    
    //Инкремент
    $count = $count + 1;
    $count += 1;
    ++$count;

    //Ветвление
    if ($count > 3)
        echo 'yea';
    else
        echo 'noup';
    
    //В чем разница между "" и ''
    echo '<br>';
    echo 'У вас $count сообщений';
    echo '<br>';
    echo "У вас $count сообщений";
    echo '<br>';
    echo 'I\'am a hero';
    echo '<br>';
    $text = "She wrote it, \"Return to sender\"";
    echo $text;
    echo '<br>';

    // Способы написания длинного текста
    $autor = "Lorem Ipsum";
    $text = "Lorem ipsum dolor sit amet consectetur, adipisicing elit. 
    Amet laboriosam ratione facilis iure architecto! Ea praesentium 
    fugiat aperiam tempore asperiores magnam esse facere officiis 
    nostrum at! Earum consectetur sed obcaecati?
    
    
    \n$autor";
    echo $text;
    
    echo "<br>";
    $text = <<<_END
    Lorem ipsum dolor, sit amet consectetur adipisicing elit. 
    Voluptas sed doloribus modi rem ratione totam deleniti aliquam 
    fugit error molestiae, et laboriosam excepturi magnam quibusdam 
    rerum culpa corrupti iste nisi? 
    - $autor!
    _END;

    echo $text
?>

<?php
    //Фишки
    $number = 1231 * 3235; // 3 982 285
    echo '<br>';
    echo substr($number, 0, 3); // $var, start, step

    echo "<br>";
    $pi = "3.1415";
    $radius = 5;
    echo $pi * ($radius * $radius);

    // Константа
    define("ROOT_LOCATION", "/usr/local/www/");
    $directory = ROOT_LOCATION;
    echo "<br>Эта строка " . __LINE__ . " в файле " . __FILE__;

    echo '<br>';
    $b ? print "TRUE" : print "FALSE"; 

    //Функции
    function longdate($timestamp)
    {
        return date("l F jS Y", $timestamp);
    }

    echo '<br>';
    echo longdate(time());

    global $var;

    // Статические переменные
    function test()
    {
        static $count = 1;
        echo "<br>Функция была вызвана $count раз";
        ++$count; 
        /*
        static $int = 0; допустимо
        static $int = 1 + 2; недопустимо
        static $int = sqrt(144); недопустимо
        */
    }

    test();
    test();
    test();
    test();

    //Суперглобальные переменные
    echo "<br> $GLOBALS";
    $came_from = $_SERVER['HTTP_REFERRER'];
    echo "<br> $come_from";
    // лучше обращаться к переменным так:
    $come = htmlentities($_SERVER['HTTP_REFERRER']);
?>