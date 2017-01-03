<?php        
    error_reporting(E_ALL);
    ini_set('display_errors', 1);
echo 'Задание 1'."<br>";
    $name = "Savinyh";
    $age = 26;
    
    //Вывод переменных
    echo 'Меня зовут '.$name."<br>";
    echo 'Мне '.$age." лет<br>";
    
    //Удаление переменных
    unset($name,$age);
echo "<br>".'Задание 2'."<br>";  
    //Создание константы - мой город
    define('my_sity','Екатеринбург');
    
    //Вывод моего города на экран
    if (defined('my_sity')) {
        echo 'Мой город: '.my_sity."<br>";
    }
    /* 
    //попробуем присвоить константе другое знаечение
    define('my_sity', 'Москва');
    
   if (defined('my_sity')) {
        echo 'Мой город: '.my_sity."<br>";
    }
    Получили ошибку:  Notice: Constant my_sity already defined in /var/www/public_html/index.php on line 24
    */
echo "<br>".'Задание 3'."<br>";  
    //Создаем ассоциативный массив $book, ключами которого будут являться значения "title", "author", "pages"
    $book = array('title' => 'PL/SQL для профессионалов'
                 ,'author' => 'Oracle'
                 ,'pages' => 700);
    echo 'Недавно я прочитал книгу "'.$book['title'].'", написанную автором '.$book['author'].', я осилил все '.$book['pages']." страниц, мне она очень понравилась<br><br>";
    
    $book2 = array('title' => 'Как покупать сайты'
                  ,'author' => 'Евгений Кошкин'
                  ,'pages' => 150);
echo "<br>".'Задание 4'."<br>";
    //Создаем индексный массив $books, который будет содержать в себе два массива $book1 и $book2, где будут записаны уже две последние прочитанные вами книги
    $books = array($book, $book2);
    
    //Выведите следующую строку на экран, следуя шаблону: "Недавно я прочитал книги 'title1' и 'title2' 
    //написанные соответственно авторами author1 и author2, я осилил в сумме pages1+pages2 страниц, не ожидал от себя подобного"
    echo 'Недавно я прочитал книги : "'
    .$books[0]['title'].'" и "'.$books[1]['title'].'"'.",<br>";
    echo ' написанные соответственно авторами: "'.$books[0]['author'].'" и "'.$books[1]['author'].'",';
    echo ' я осилил в сумме:'.($books[0]['pages']+$books[1]['pages']).' страниц, не ожидал от себя подобного!';
            