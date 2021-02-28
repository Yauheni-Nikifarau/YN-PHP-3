
<?php require './functions/functions.php'?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="css/style.css">
</head>
<body>
<div class="site">
    <div class="task task1">
        <?php $varTask1=$_GET['task1'] ?? 3; ?>
        <h3>ЗАДАНИЕ 1</h3>
        <p>Куб</p>
        <form action="/" method="get">
            <input type="number" name='task1' value='<?= $varTask1; ?>'/>
            <button>Получить результат</button>
        </form>
        <p>Результат: <?= task1cub($varTask1);?></p>
    </div>

    <div class="task task2">
        <?php $varTask2_1=$_GET['task2_1'] ?? 3; $varTask2_2=$_GET['task2_2'] ?? 10; ?>
        <h3>ЗАДАНИЕ 2</h3>
        <p>Сумма двух чисел</p>
        <form action="/" method="get">
            <input type="number" name='task2_1' value='<?= $varTask2_1; ?>'/>
            <input type="number" name='task2_2' value='<?= $varTask2_2; ?>'/>
            <button>Получить результат</button>
        </form>
        <p>Результат: <?= task2sum($varTask2_1, $varTask2_2);?></p>
    </div>

    <div class="task task3">
        <?php $varTask3=$_GET['task3'] ?? 3; ?>
        <h3>ЗАДАНИЕ 3</h3>
        <p>День недели</p>
        <form action="/" method="get">
            <input type="number" name='task3' min="1" max="7" value='<?= $varTask3; ?>'/>
            <button>Получить результат</button>
        </form>
        <p>Результат: <?= task3dayOfWeek($varTask3);?></p>
    </div>

    <div class="task task4">
        <?php $varTask4=$_GET['task4'] ?? -3; ?>
        <h3>ЗАДАНИЕ 4</h3>
        <p>Проверка на отрицательное число</p>
        <form action="/" method="get">
            <input type="number" name='task4' value='<?= $varTask4; ?>'/>
            <button>Получить результат</button>
        </form>
        <p>Результат: <?= task4negative($varTask4) ? 'true' : 'false';?></p>
    </div>

    <div class="task task5">
        <?php $varTask5=$_GET['task5'] ?? -3454353; ?>
        <h3>ЗАДАНИЕ 5</h3>
        <p>Сумма цифр числа</p>
        <form action="/" method="get">
            <input type="number" name='task5' value='<?= $varTask5; ?>'/>
            <button>Получить результат</button>
        </form>
        <p>Результат: <?= task5digitsSum($varTask5);?></p>
    </div>

    <div class="task task6">
        <h3>ЗАДАНИЕ 6</h3>
        <p>Годы от 1 до 2020, сумма цифр которых равна 13</p>
        <p>Результат: <?= task6years13();?></p>
    </div>

    <div class="task task7">
        <?php $varTask7=$_GET['task7'] ?? -3; ?>
        <h3>ЗАДАНИЕ 7</h3>
        <p>Проверка на чётное число</p>
        <form action="/" method="get">
            <input type="number" name='task7' value='<?= $varTask7; ?>'/>
            <button>Получить результат</button>
        </form>
        <p>Результат: <?= task7isEven($varTask7) ? 'true' : 'false';?></p>
    </div>

    <div class="task task8">
        <?php $varTask8= 'Съешь ещё этих мягких французских булок да выпей чаю'; ?>
        <h3>ЗАДАНИЕ 8</h3>
        <p>Транслит строки с русского на латиницу: <?= $varTask8?></p>
        <p>Результат: <?= task8Translit($varTask8);?></p>
    </div>

    <div class="task task9">
        <?php $varTask9=$_GET['task9'] ?? 14; ?>
        <h3>ЗАДАНИЕ 9</h3>
        <p>Определение правильной формы слова</p>
        <form action="/" method="get">
            <input type="number" name='task9' value='<?= $varTask9; ?>'/>
            <button>Получить результат</button>
        </form>
        <?php $quantity = $varTask9; $var1 = 'груша'; $var2 = 'груши'; $var3 = 'груш'; ?>
        <p>Результат: <?= $quantity.' '.task9wordForm($quantity, $var1, $var2, $var3);?>.</p>
    </div>

    <div class="task task10">
        <h3>ЗАДАНИЕ 10</h3>
        <p>Рекурсивное выведение массива</p>
        <?php $array = ['text', 2, null, 0, true, false, -11, '', 123] ?>
        <p>Результат: <?= task10printArray($array);?>.</p>
    </div>

    <div class="task task11">
        <?php $varTask11=$_GET['task11'] ?? 99999999; ?>
        <h3>ЗАДАНИЕ 11</h3>
        <p>Рекурсивное сложение цифр числа</p>
        <form action="/" method="get">
            <input type="number" name='task11' value='<?= $varTask11; ?>'/>
            <button>Получить результат</button>
        </form>
        <p>Результат: <?= task11recursiveDigitsSum($varTask11);?></p>
    </div>

    <div class="task task12">
        <h3>ЗАДАНИЕ 12</h3>
        <p>Рекурсивное сложение цифр числа</p>
        <?php $varTask12_dist = $_GET['task12_dist'] ?? 100;
                $varTask12_time = $_GET['task12_time'] ?? 3;
                $varTask12_unit = $_GET['task12_unit'] ?? 'км/ч';?>
        <form action="/" method="get">
            <label for="task12_time">Время в пути(ч)</label>
            <input type="number" name='task12' id='task12_time' value='<?= $varTask12_time; ?>'/><br/>
            <label for="task12_dist">Пройденная дистанция(км)</label>
            <input type="number" name='task12' id='task12_dist' value='<?= $varTask12_dist; ?>'/><br/>
            <label for="task12_unit_ms">м/с</label>
            <input type="radio" name="task12_unit" id='task12_unit_ms' value='м/с'><br/>
            <button>Получить результат</button>
        </form>
        <p>Результат: <?= task12speed($varTask12_time, $varTask12_dist, $varTask12_unit);?></p>
    </div>

    <div class="task task13">
        <?php $varTask13_word1 = $_GET['task13_word1'] ?? 'hello';
                $varTask13_word2 = $_GET['task13_word2'] ?? 'lehlo';
                ?>
        <h3>ЗАДАНИЕ 13</h3>
        <p>Можно ли из букв одного слова составить другое</p>
        <form action="/" method="get">
            <label for="task13_word1">Слово, из букв которого будем составлять слово</label>
            <input type="text" name='task13_word1' id='task13_word1' value='<?= $varTask13_word1; ?>'/><br/>
            <label for="task13_word2">Слово, которое будем пытаться составить</label>
            <input type="text" name='task13_word2' id='task13_word2' value='<?= $varTask13_word2; ?>'/><br/>
            <button>Получить результат</button>
        </form>
        <p>Результат: <?= (task13words($varTask13_word1, $varTask13_word2)) ? 'Можно' : 'Нельзя';?></p>
    </div>

    <div class="task task14">
        <?php $varTask14word = $_GET['task14word'] ?? 'helleh';?>
        <h3>ЗАДАНИЕ 14</h3>
        <p>Определение палиндрома</p>
        <form action="/" method="get">
            <input type="text" name='task14word'value='<?= $varTask14word; ?>'/>
            <button>Получить результат</button>
        </form>
        <p>Результат: <?= (task14Palindrom($varTask14word)) ? 'Да' : 'Нет';?></p>
    </div>

    <div class="task task15">
        <h3>ЗАДАНИЕ 15</h3>
        <p>Таблица умножения</p>
        <?= task15multipleTable();?>
    </div>

    <div class="task task16">
        <?php $varTask16word = 'West Germanic language first spoken in early medieval England';?>
        <h3>ЗАДАНИЕ 16</h3>
        <p>Самое длинное слово в строке: <?= $varTask16word ?></p>
        <p>Результат: <?= task16getTheMostLongWord($varTask16word);?></p>
    </div>

    <div class="task task17">
        <h3>ЗАДАНИЕ 17</h3>
        <p>Суммарное количество единиц в числах от 1 до 100</p>
        <p>Результат: <?= task17count1();?></p>
    </div>

    <div class="task task18">
        <?php 
        $message = 'English is the largest language by number of speakers, and the third most-spoken native language in the world, after Standard Chinese and Spanish.';?>
        <h3>ЗАДАНИЕ 18</h3>
        <p>Разбивание строки(30 символов)</p>
        <p><?= $message?></p>
        <p>NoWrap</p>
        <p><?= task18stringSeparateNoWrap(30, $message);?></p>
        <p>Wrap</p>
        <p><?= task18stringSeparateWrap(30, $message);?></p>
    </div>
</div>
    
</body>
</html>