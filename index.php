<?php
declare(strict_types=1);
namespace App;
require_once __DIR__ . '/vendor/autoload.php';
use App\Student;
use App\Employee;

$student = new Student("Bogdan", 2);
$student->transferToNextCourse();
echo $student->getCourse() . "<br>";

$empl1 = new Employee("eric", 25, 1000);
$empl2 = new Employee("kyle", 30, 2000);
echo "Salary: " . $empl1->getSalary();




?>