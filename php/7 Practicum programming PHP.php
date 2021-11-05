<?php 
    printf("В вашей корзине находится %d покупки", 3);
    echo "<br>";
    printf("Меня зовут %s. Мне %d года, то есть %X в шестнадцатеричном представлении",
 'Симон', 33, 33);
    echo "<br>";
    printf("<span color='#%X%X%X'>Привет</span>", 65, 127, 245);
    echo "<br>";
    printf("<span color='#%X%X%X'>Привет</span>", $r-20, $g-20, $b-20);
    echo "<br>";

    //Настройка представления данных
    printf("Результат: $%.2f", 123.42 / 12);
    echo "<br>";

    echo "<pre>"; // Тег, позволяющий отображать все пустые пространства
    // Дополнение пробелами до 15 знако-мест
    printf("Результат равен $%15f\n", 123.42 / 12);
    // Дополнение нулями до 15 знако-мест
    printf("Результат равен $%015f\n", 123.42 / 12);
    // Дополнение пробелами до 15 знако-мест и вывод с точностью до двух
    // десятичных знаков
    printf("Результат равен $%15.2f\n", 123.42 / 12);
    // Дополнение нулями до 15 знако-мест и вывод с точностью до двух
     // десятичных знаков
    printf("Результат равен $%015.2f\n", 123.42 / 12);
    // Дополнение символами # до 15 знако-мест и вывод с точностью до двух
    //десятичных знаков
    printf("Результат равен $%'#15.2f\n", 123.42 / 12);
    echo "</pre><br>";

    // Дополнение строк
    echo "<pre>"; // Тег, позволяющий отображать все пустые пространства
    $h = 'Rasmus';
    printf("[%s]\n", $h); // Стандартный вывод строки
    printf("[%12s]\n", $h); // Выравнивание пробелами по правому краю до ширины 12
    printf("[%-12s]\n", $h); // Выравнивание пробелами по левому краю
    printf("[%012s]\n", $h); // Дополнение нулями
    printf("[%'#12s]\n\n", $h); // Использование специально выбранного
    // символа дополнения '#'
    $d = 'Rasmus Lerdorf';
    printf("[%12.8s]\n", $d); // Выравнивание по правому краю с усечением
    // до 8 символов
    printf("[%-12.12s]\n", $d); // Выравнивание по левому краю с усечением
    // до 12 символов
    printf("[%-'@12.10s]\n", $d); // Выравнивание по левому краю, дополнение
    // символом '@', усечение до 10 символов
    echo "</pre><br>";
    
    //Функция sprintf
    $hexstring = sprintf("%X%X%X", 65, 127, 245);
    $out = sprintf("Результат: $%.2f", 123.42 / 12);
    echo $out . "<br>";

    // Функции даты и времени
    echo time() . "<br>";
    echo time() + 7 * 24 * 60 * 60 . "<br>"; // 7 дней ⋅ 24 часа ⋅ 60 минут ⋅ 60 секунд
    echo mktime(0, 0, 0, 1, 1, 2000) . "<br>"; // 946684800
    
    date($format, $timestamp);
    echo date("l F jS, Y - g:ia", time()) . "<br>";

    // Константы связаные с датами
    echo DATE_ATOM . "<br>";
    echo date(DATE_ATOM, time()) . "<br>";

    echo DATE_COOKIE . "<br>";
    echo date(DATE_COOKIE, time()) . "<br>";

    echo DATE_W3C . "<br>";
    echo date(DATE_W3C, time()) . "<br>";

    // Функция checkdate
    $month = 9; // Сентябрь (в котором только 30 дней)
    $day = 31; // 31-е
    $year = 2018; // 2018
    if (checkdate($month, $day, $year)) echo "Допустимая дата";
    else echo "Недопустимая дата";
    echo "<br>";
    
    // Работа с файлами
    // Проверка существования файла
    if (file_exists("testfile.txt")) echo "Файл существует";
    echo "<br>";

    // Создание файла
    $fh = fopen("testfile.txt", 'w') or die("Создать файл не удалось");
    $text = <<<_END
    Строка 1
    Строка 2
    Строка 3
    _END;

    fwrite($fh, $text) or die("Сбой записи файла");
    fclose($fh);
    echo "Файл 'testfile.txt' записан успешно ";
    echo "<br>";

    // Чтение из файлов
    $fh = fopen("testfile.txt", 'r') or
    die("Файл не существует или вы не обладаете правами на его открытие");
    $line = fgets($fh);
    fclose($fh);
    echo $line . "<br>";

    $fh = fopen("testfile.txt", 'r') or
    die("Файл не существует или вы не обладаете правами на его открытие");
    $text = fread($fh, 3);
    fclose($fh);
    echo $text;
    print_r($text);
    echo "<br>";

    // Копирование файлов
    copy('testfile.txt', 'testfile2.txt') or die("Копирование невозможно");
    echo "Файл успешно скопирован в 'testfile2.txt'";
    echo "<br>";
    
    if (!copy('testfile.txt', 'testfile2.txt')) echo " Копирование невозможно";
    else echo "Файл успешно скопирован в 'testfile2.txt'";
    echo "<br>";

    // Перемещение файла
    if (!rename('testfile2.txt', 'testfile2.new'))
    echo "Переименование невозможно";
    else echo "Файл успешно переименован в 'testfile2.new'";
    echo "<br>";

    // Удаление файла
    if (!unlink('testfile2.new')) echo "Удаление невозможно ";
    else echo "Файл 'testfile2.new' удален успешно";
    echo "<br>";

    // Обновление файлов
    $fh = fopen("testfile.txt", 'r+') or die("Сбой открытия файла");
    $text = fgets($fh);
    fseek($fh, 0, SEEK_END);
    fwrite($fh, "$text") or die("Сбой записи в файл");
    fclose($fh);
    echo "Файл 'testfile.txt' успешно обновлен";
    echo "<br>";

    // Блокировка при коллективном доступе
    $fh = fopen("testfile.txt", 'r+') or die("Сбой открытия файла");
    $text = fgets($fh);
    if (flock($fh, LOCK_EX))
    {
        fseek($fh, 0, SEEK_END);
        fwrite($fh, "$text") or die("Сбой записи в файл");
        flock($fh, LOCK_UN);
    }
    fclose($fh);
    echo "Файл 'testfile.txt' успешно обновлен";
    echo "<br>";

    // Чтение файла целиком
    echo "<pre>"; // Тег, позволяющий отображать переводы строк
    echo file_get_contents("testfile.txt");
    echo "</pre>"; // Прекращение действия тега pre
    
    // echo file_get_contents("http://oreilly.com");

    // Загрузка файлов на веб сервер
    echo <<<_END
    <html><head><title>PHP-форма для загрузки файлов на сервер</title></head><body>
    <form method='post' action='upload.php' enctype='multipart/form-data'>
    Выберите файл: <input type='file' name='filename' size='10'>
    <input type='submit' value='Загрузить'>
    </form>
    _END;
    if ($_FILES)
    {
        $name = $_FILES['filename']['name'];
        move_uploaded_file($_FILES['filename']['tmp_name'], $name);
        echo "Загружаемое изображение '$name'<br><img src='$name'>";
    }
    echo "</body></html>";

    // Использование массива $_FILES
    // Проверка допустимости 
    echo <<<_END
    <html><head><title>PHP-форма для загрузки файлов
    на сервер</title></head><body>
    <form method='post' action='upload2.php' enctype='multipart/form-data'>
    Выберите файл с расширением JPG, GIF, PNG или TIF:
    <input type='file' name='filename' size='10'>
    <input type='submit' value='Загрузить'></form>
    _END;
    if ($_FILES)
    {
        $name = $_FILES['filename']['name'];
        switch($_FILES['filename']['type'])
        {
            case 'image/jpeg': $ext = 'jpg'; break;
            case 'image/gif': $ext = 'gif'; break;
            case 'image/png': $ext = 'png'; break;
            case 'image/tiff': $ext = 'tif'; break;
            default: $ext = ''; break;
        }
        if ($ext)
        {
            $n = "image.$ext";
            move_uploaded_file($_FILES['filename']['tmp_name'], $n);
            echo "Загружено изображение '$name' под именем '$n':<br>";
            echo "<img src='$n'>";
        }
        else echo "'$name' — неприемлемый файл изображения";
    }
    else echo "Загрузки изображения не произошло";
    echo "</body></html>";
    
    // Системные вызовы
    // $cmd = "dir"; // Windows
    $cmd = "ls"; // Linux, Unix & Mac
    exec(escapeshellcmd($cmd), $output, $status);
    if ($status) echo "Команда exec не выполнена";
    else
    {
        echo "<pre>";
        foreach($output as $line) echo htmlspecialchars("$line\n");
        echo "</pre>";
    }    
?>