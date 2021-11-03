<?php
    // Функции
    // phpinfo();
    echo strrev('Hello world!'); // Переворачивание строки
    echo "<br>";
    echo str_repeat("Ha ", 4); // Повторение строки
    echo "<br>";
    echo strtoupper('amazon'); // Верхний регистр
    echo "<br>";
    print('dsdsd<br>'); // dsdsd
    PrINT('dsdsd<br>'); // dsdsd

    $lowered = strtolower("LoreE IpsUm DOlor SIT amet, conSEctEturR adIpiSicInG Elit. AtUUA DeleNiti fUga AUT.");
    echo "$lowered<br>";

    $fixed = ucfirst($lowered);
    echo "$fixed<br>";

    function fix_names($n1, $n2, $n3)
    {
        $n1 = ucfirst(strtolower($n1));
        $n2 = ucfirst(strtolower($n2));
        $n3 = ucfirst(strtolower($n3));

        return $n1 . " " . $n2 . " " . $n3;
    }

    echo fix_names('ALEX', 'anDRey', 'EgoR') . "<br>";

    // Возарвщение массива
    function fix_names_array($n1, $n2, $n3)
    {
        $n1 = ucfirst(strtolower($n1));
        $n2 = ucfirst(strtolower($n2));
        $n3 = ucfirst(strtolower($n3));

        return array($n1, $n2, $n3);
    }

    $names = fix_names_array('ALexAndR', 'Mariya', 'roman');
    echo $names[0] . " " . $names[1] . " " . $names[2] . "<br>";

    // Передача аргумента по ссылке
    function fix_names_links(&$n1, &$n2, &$n3)
    {
        $n1 = ucfirst(strtolower($n1));
        $n2 = ucfirst(strtolower($n2));
        $n3 = ucfirst(strtolower($n3));
    }

    $name1 = 'VovA';
    $name2 = 'IVAN';
    $name3 = 'EvgeNIYA';

    fix_names_links($name1, $name2, $name3);
    echo "$name1 $name2 $name3<br>";

    // include
    // include_once "library.php"; // вставка кода произойдент ЕДИНОЖДЫ, даже при попытках вставить повторно
    // include "library.php";
    
    // require
    // В отличии от include затребывает файл, пока тот не будет получен
    // require_once "library.php";
    // require "library.php";

    // Совместимость версии
    if (function_exists("array_combine"))
    {
        echo "Функция существует<br>";
    }
    else 
    {
        echo "Функция не существует<br>";
    }

    //Объекты PHP
    class User 
    {
        public $name, $password;

        function save_user()
        {
            // Какой-то код
        }
    }

    $object = new User;
    print_r($object);
    echo "<br>";

    $object = new User('admin', 'pass');
    print_r($object);
    echo "<br>";

    // Доступ к объектам
    $object = new User;
    $object->name = 'admin';
    $object->password = 'password';
    print_r($object);
    echo "<br>";

    // Клонирование объектов
    class User2 
    {
        public $name;
    }

    $user1 = new User2;
    $user1->name = "Alice";
    $user2 = $user1;
    $user2->name = "Elena";
    print_r($user1); // Elena
    echo "<br>";

    $user1->name = "Alice";
    $user2 = clone $user1;
    $user2->name = "Elena";
    print_r($user1); // Alice
    echo "<br>";

    // Конструктор и деструктор
    class User3 
    {
        public $name, $password;

        function __construct($username, $user_password)
        {   
            $this->name = $username;
            $this->password = $user_password;
            // Какой-то код
        }

        function __destruct()
        {
            // Какой-то код
        }

        function get_data()
        {
            return $this->name . " " . $this->password;
        }
    }
    $object = new User3('adminos', 'passos');
    print_r($object);
    echo "<br>";
    echo $object->get_data() . "<br>";


    // Константы
    /*
    Оператор разрешения области видимости (также называемый 
    "Paamayim Nekudotayim") или просто "двойное двоеточие" - 
    это лексема, позволяющая обращаться к статическим свойствам, 
    константам и переопределённым свойствам или методам класса. 
    */

    class MyClass 
    {
        const CONST_VALUE = 'Значение константы';
    }
    
    $classname = 'MyClass';
    echo $classname::CONST_VALUE . "<br>";
    
    echo MyClass::CONST_VALUE . "<br>";

    // Статические методы
    /*
    Это означает что метод вызывается классом, а не объектом.
    Статическая функция не имеет доступа к свойствам объекта.
    */
    class User4
    {
        static function pwd_string()
        {
            echo "Введите ваш пароль: <br>";
        }
    }

    User4::pwd_string();

    // Статические свойства
    class Test
    {
        static $static_property = "Это статическое свойство";
        static $counter = 0;

        function __construct()
        {
            self::$counter++;
        }

        function get_sp()
        {
            return self::$static_property;
        }
    }

    $temp1 = new Test;
    $temp2 = new Test;
    $temp3 = new Test;
    $temp4 = new Test;

    echo Test::$counter . "<br>"; // 4
    echo "Тест А: " . Test::$static_property . "<br>";
    echo "Тест Б: " . $temp1->get_sp() . "<br>";
    // echo "Тест В: " . $temp1->static_properety . "<br>"; // Так нельзя!!!

    // Наследование
    class Testing extends Test
    {
        public $var = 'aga';

        function get_var() 
        {
            return $this->var;
        }
    }

    $temp1 = new Testing;
    $temp2 = new Testing;

    echo Testing::$counter . "<br>"; // 6

    $temp3 = new Test;

    echo Testing::$counter . "<br>"; // 7
    echo "Тестинг А: " . $temp1->get_sp() . "<br>";
    echo "Тестинг Б: " . $temp1->get_var() . "<br>";
    

    // Ключевое слово parent
    /*
    Когда в поклассе, создается метод с именем, которое уже
    фигурирует в его родительском классе, его инструкции
    переписывают инструкции из его родительского класса.
    иногда такое поведение нежалательно, для этого можно
    воспользоваться конструкцией parent  
    */
    $object = new Son;
    $object->test();
    $object->test2();

    class Dad
    {
        function test()
        {
            echo "[Class Dad] Я твой отец<br>";
        }
    }
    class Son extends Dad
    {
        function test()
        {
            echo "[Class Son] Я Люк<br>";
        }
        function test2()
        {
            parent::test();
        }
    }

    // Конструкторы подкласса
    /*
    PHP не станет автоматически вызывать метод-констркутор 
    родительского  класса. Чтобы обеспечивать выполнение 
    всего кода инициализации, подкласс, всегда должен
    вызывать родительские конструкторы.
    */
    $object = new Tiger();
    echo "У тигров есть...<br>";
    echo "Мех: " . $object->fur . "<br>";
    echo "Полосы: " . $object->stripes;

    class Wilcat
    {
        public $fur; // У диких кошек есть мех

        function __construct()
        {
            $this->fur = "TRUE";
        }
    }

    class Tiger extends Wilcat
    {
        public $stripes; // У тигра есть полосы

        function __construct()
        {
            parent::__construct(); // Первоочередной вызов родительского класса
            $this->stripes = "TRUE";
        }
    }

    // Методы Final
    /* 
    При необходимости помешать подклассу переписать метод суперкласса
    можно воспользоваться ключевым словом final.
    */

    class User6
    {
        final function copyright()
        {
            echo "Этот класс был создан Джоном Доун";
        }
    }
?>