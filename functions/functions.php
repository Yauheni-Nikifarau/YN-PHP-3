<?php 

// ЗАДАНИЕ 1 - Куб числа
function task1cub (int|float $x) :int|float {
    return $x**3;
}

// ЗАДАНИЕ 2 - Сумма двух чисел
function task2sum (int|float $x, int|float $y) :int|float {
    return $x+$y;
}

// ЗАДАНИЕ 3 - Определение дня недели
function task3dayOfWeek (int $day) :string {
    switch ($day) {
        case 1:
            return 'Понедельник';
            break;
        case 2:
            return 'Вторник';
            break;
        case 3:
            return 'Среда';
            break;
        case 4:
            return 'Четверг';
            break;
        case 5:
            return 'Пятница';
            break;
        case 6:
            return 'Суббота';
            break;
        case 7:
            return 'Воскресенье';
            break;
        default:
            return 'Нет такого дня';
    }
}

// ЗАДАНИЕ 4 - Проверка на отрицательное число
function task4negative (int|float $x) :int|float {
    return $x<0;
}

// ЗАДАНИЕ 5 - Сумма цифр числа
function task5digitsSum (int $x) :int {
    $x = abs($x);
    $x = (string) $x;
    $x = str_split($x);
    $result = array_reduce($x, function ($acc, $value) {return $acc + $value;});
    return $result;
}

// Задание 6 - Нахождение чисел от 1 до 2020, сумма цифр которого равна 13
function task6years13 () :string {
    $result = [];
    for ($i = 1; $i <= 2020; $i++) {
        if(task5digitsSum($i) == 13) {
            array_push($result, $i);
        }
    }
    return implode(", ", $result);
}

// Задание 7 - Проверка на чётное число
function task7isEven (int $x) :bool {
    return $x % 2 == 0;
}

// Задание 8 - Транслит строки c русского на латиницу
function task8translit (string $str) :string {
    $dictionaryLowerCase = ['а' => 'a', 'б' => 'b', 'в' => 'v', 'г' => 'g', 'д' => 'd', 'е' => 'e', 'ё' => 'yo', 'ж' => 'zh', 'з' => 'z', 'и' => 'i', 'й' => 'y', 'к' => 'k', 'л' => 'l', 'м' => 'm', 'н' => 'n', 'о' => 'o', 'п' => 'p', 'р' => 'r', 'с' => 's', 'т' => 't', 'у' => 'u', 'ф' => 'f', 'х' => 'kh', 'ц' => 'ts', 'ч' => 'ch', 'ш' => 'sh', 'щ' => 'sch', 'ъ' => '\'', 'ы' => 'y', 'ь' => '\'', 'э' => 'e', 'ю' => 'yu', 'я' => 'ya'];
    $dictionaryUpperCase = ['А' => 'A', 'Б' => 'B', 'В' => 'V', 'Г' => 'G', 'Д' => 'D', 'Е' => 'E', 'Ё' => 'Yo', 'Ж' => 'Zh', 'З' => 'Z', 'И' => 'I', 'Й' => 'Y', 'К' => 'K', 'Л' => 'L', 'М' => 'M', 'Н' => 'N', 'О' => 'O', 'П' => 'P', 'Р' => 'R', 'С' => 'S', 'Т' => 'T', 'У' => 'U', 'Ф' => 'F', 'Х' => 'Kh', 'Ц' => 'Ts', 'Ч' => 'Ch', 'Ш' => 'Sh', 'Щ' => 'Sch', 'Ъ' => '\'', 'Ы' => 'Y', 'Ь' => '\'', 'Э' => 'E', 'Ю' => 'Yu', 'Я' => 'Ya'];
    $dictionary = array_merge($dictionaryUpperCase, $dictionaryLowerCase);
    $result = '';
    for ($i = 0; $i < strlen($str); $i++) {
        $char = substr($str, $i , 2);
        if (array_key_exists($char, $dictionary)) {
            $result .= $dictionary[$char];
            $i++;
        } else {
            $result .= $str[$i];
        }
    }
    return $result;
}

// Задание 9 - Определение правильной формы слова
function task9wordForm (int $quantity, string $var1, string $var2, string $var3) :string {
    if ($quantity > 10 && $quantity < 15) {
        return $var3;
    } elseif ($quantity % 10 == 1) {
        return $var1;
    } elseif ($quantity % 10 > 1 && $quantity % 10 < 5) {
        return $var2;
    } else {
        return $var3;
    }
}

// Задание 10 - Рекурсивное выведение массива
function task10printArray ($array, $i = 0) {
    if ($i < count($array)) {
        echo $array[$i];
        if ($i != (count($array) - 1)) echo ', ';
        task10printArray($array, ++$i);
    } 
}

// Задание 11 - Рекурсивное сложение цифр числа
function task11recursiveDigitsSum ($num) :int {
    $result = task5digitsSum($num);
    if ($result <= 9) {
        return $result;
    } else {
        return task11recursiveDigitsSum ($result);
    }
}

// Задание 12 - Рекурсивное сложение цифр числа
function task12speed (int|float $time, int|float $distance, string $unit = 'км/ч') :string {
    if ($unit != 'км/ч' && $unit != 'м/с') return 'неправильно указана единица измерения';
    $result = $distance / $time;
    if ($unit == 'м/с') $result /= 3.6;
    return round($result,2).' '.$unit;
}

// Задание 13 - Можно ли из первого слова составить второе
function task13words (string $word1, string $word2) :bool {
    $word1 = str_split($word1);
    $word2 = str_split($word2);
    if (count($word1) < count($word2)) return false;
    foreach($word1 as $char) {
        $index = array_search($char, $word2);
        if ($index !== false) {
            array_splice($word2, $index, 1);
        }
    }
    if (count($word2) == 0) {
        return true;
    } else {
        return false;        
    }
}

// Задание 14 - Определение палиндрома
function task14Palindrom (string $word) :bool {
    return $word == strrev($word);
}

// Задание 15 - Представление таблицы умножения в html таблице
function task15multipleTable () :string {
    $result = '<table>';
    for ($j = 1; $j <= 10; $j++) {
        $result .= '<tr>';
        for ($i = 1; $i <= 10; $i++) {
            $result .= '<td>'.$i.' * '.$j.' = '.($i*$j);
        }
        $result .= '</tr>';
    }
    $result .= '</table>';
    return $result;
}

// Задание 16 - самое длинное слово в строке
function task16getTheMostLongWord (string $str) :string {
    $arWords = explode(' ', $str);
    $result = array_reduce($arWords, function ($acc, $val) {
        if (strlen($val) > strlen($acc)) return $val;
        return $acc;
    });
    return $result;
}

// Задание 17 - Суммарное количество единиц в числах от 1 до 100
function task17count1 () {
    $result = 0;
    for ($i = 1; $i <= 100; $i++) {
        $str = (string) $i;
        $result += substr_count($str, '1');
    }
    return $result;
}

// Задание 18 - Разбивание строки
function task18stringSeparateNoWrap (int $n, string $str) :string {
    $arStrings = [];
    $start = 0;
    $end = $n-1;
    while ($start < strlen($str)) {
        if ($end >= strlen($str)) {
            $end = strlen($str)-1;
        } elseif ($str[$end + 1] != ' ') {
            for ($i = $end; $i >= $start; $i--) {
                if ($str[$i] == ' ') {
                    $end = $i;
                    break;
                }
            }
        }
        $length = $end - $start + 1;
        $arStrings[] = substr($str, $start, $length);
        $start = $end+1;
        $end = $start+$n-1;
    }
    $arStrings = array_filter($arStrings, function($val) {return trim($val) != '';});
    return join('<br/>',$arStrings);
}

function task18stringSeparateWrap (int $n, string $str) :string {
    $arStrings = str_split($str, $n);
    $arStrings = array_map(function ($val) {return trim($val);}, $arStrings);
    $arStrings = array_filter($arStrings, function($val) {return $val != '';});
    return join('<br/>',$arStrings);
}





?>