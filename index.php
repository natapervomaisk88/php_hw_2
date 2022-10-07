<?php
declare(strict_types=1);
namespace App;
require_once __DIR__ . '/vendor/autoload.php';
use App\Employee;
use App\User;
use App\Rectangle;


$employee1 = new Employee('John', 25, 1000);
$employee2 = new Employee('Eric', 26, 2000);

echo  "Сума зарплат користувачів: " . $employee1->getSalary() + $employee2->getSalary() . "<br>";
echo  "Сума віку користувачів: " . $employee1->getAge() + $employee2->getAge();

$empl1 = new Employee("Petro", 25, 1500);
$empl2 = new Employee("Stepan", 27, 2500);

$totalSalary = $empl1->getSalary()+$empl2->getSalary();
echo "Total salary: $totalSalary<br>";

$user = new User("john", 19);
$user->setAge(30);
echo "Class User <br>";
echo "Age: " .  $user->getAge() . "<br>";

echo "Rectangle: <br>";
$rect = new Rectangle(12,4);
echo "S: " . $rect->getSquare() . "<br>";
echo "P: " . $rect->getPerimeter() . "<br>";


?>