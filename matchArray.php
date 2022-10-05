<?php
// Задание 3    Даны два одномерных массива:
//$first = [1, 212, 3876, 481, 75, 36, 24, 76, 81, 2734, 6751, 53, 76, 4512, 364, 51826, 374, 61, 93, 26, 4517, 26, 3, 5, 4, 1, 23465, 851, 56253, 76, 41, 783, 26, 9461, 238, 674, 51, 95, 2, 39764];
//$second = [7638, 2710, 4157, 82, 36017, 6397562, 93, 47, 519, 037985, 716038, 479176, 345872, 653486, 53, 48, 652, 9, 7, 4369278, 36, 48576, 2934765, 62973, 645, 62, 5364, 9, 7, 562, 9387, 465, 927346, 957, 2364, 9572, 69347, 956]; 
//Найдите во втором массиве самое маленькое число, большее, чем среднеарифметическое значение всех элементов первого массива.

$first = [1, 212, 3876, 481, 75, 36, 24, 76, 81, 2734, 6751, 53, 76, 4512, 364, 51826, 374, 61, 93, 26, 4517, 26, 3, 5, 4, 1, 23465, 851, 56253, 76, 41, 783, 26, 9461, 238, 674, 51, 95, 2, 39764];
$second = [7638, 2710, 4157, 82, 36017, 6397562, 93, 47, 519, 37985, 716038, 479176, 345872, 653486, 53, 48, 652, 9, 7, 4369278, 36, 48576, 2934765, 62973, 645, 62, 5364, 9, 7, 562, 9387, 465, 927346, 957, 2364, 9572, 69347, 956];
$sum = array_sum($first);
$count = count($first);
$middle = $sum / $count;
//var_dump($middle);  //Выведет среднее арифметическое float(5201.7)


$resultArr =[];
foreach($second as $value){
    if($value > $middle){
        $resultArr[] = $value;
    }
}
sort($resultArr);

$number = $resultArr[0];
var_dump($number);  //Выведет int(5364)
