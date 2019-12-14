<?php
$a = array("a" => "apple", "b" => "banana");
$b = array("d" => "apple", "n" => "strawberry", "c" => "cherry");

$c = $a + $b; // Объединение $a и $b
echo "Слияние 2 массивов";
var_dump($c , "<br />");
$firsts = $a + $b; // Объединение $a и $b
echo "3 задание , слияние и убираем все повторящие";
$result = array_unique($firsts);
var_dump($result, "<br />");
$input = array("a" => "green", "red", "b" => "green", "blue", "red");
echo "1 задание убрали все повторяющие";
$result = array_unique($input);
print_r($result);
echo "<br />";
echo "выводит количество дублирущих элементов двух массивов";
$first = array("by" => "apple", "be" => "banana" , "bm" => "manda" , "name" => "Arthur");
$second = array("bw" => "apple", "bq" => "banana" , "ber" => "manda" , "names" => "Andrey");
$sum = $first + $second; // Объединение $a и $b
print_r(array_count_values ($sum));
echo "<br />";
echo "Меняем что-то с ласт элементом";
echo "<br />";
$array = array(1,2,3,4,5);
foreach ($array as $key => $value) {
    echo $value;
    if($value == end($array)) {

            echo ",+5 ";
    }
    else {
        echo ",-5 ";
    }
}
echo "<br />";
echo "меняет местами значения массива макс и минимальный";
$a = array(1,2,3,4,5);
$min = 0;
$max = 0;
$count = count ($a);
// search min and max indexes
for ($i = 1; $i < $count; $i++) {
    if ($a[$i] > $a[$max]) $max = $i;
    if ($a[$i] < $a[$min]) $min = $i;
}
// switch min and max
$a[$min] += $a[$max];
$a[$max] = $a[$min] - $a[$max];
$a[$min] = $a[$min] - $a[$max];
print_r($a);
echo "<br />";
echo "меняет местами значения массива";
$city = array(0 => '1', 1 => '2', 2 => '3' , 3 => '4', 4 => '5', 5 => '6');
list($city[0], $city[5]) = array($city[5], $city[0]);
list($city[1], $city[4]) = array($city[4], $city[1]);
list($city[2], $city[3]) = array($city[3], $city[2]);
print_r($city);
?>