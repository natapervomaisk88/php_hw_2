<?php
require_once __DIR__ . '/vendor/autoload.php';
use App\City;
use App\Arr;
use App\User;

$arr = new Arr();
$arr->add([1,2,3]); //додаємо дані до масиву
$arr->add([5,6]); 
echo 'Середнє арифметичне значення: ' . $arr->getAvg() . '<br>'; //отримуємо середнє значення

$city = new City('Odessa', '1794', 750000);
$props = ['name', 'foundation', 'population'];
foreach($props as $p)
{
    echo 'Property: ' . $p . '. Value: ' . $city->$p . '<br>';
}

//created objects of class User and the array of properties
$user = new User('Богдан', 'Степанов', 'Дмитрович', 30);
$props = ['name', 'surname', 'patronymic', 'age'];

echo 'Property: ' . $props[1] . '. Value: ' . $user->{$props[1]} . '<br>';

$methods = ['method1' => 'getName', 'method2' => 'getAge', 'method3' => 'getSurname'];
echo '<br>';
echo  $user->{$methods['method1']}() . '<br>';
echo  $user->{$methods['method2']}() . '<br>';
echo  $user->{$methods['method3']}() . '<br>';

?>