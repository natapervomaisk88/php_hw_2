<?php
require_once __DIR__ . '/vendor/autoload.php';
use App\Student;
use App\Employee;

$student = new Student("Bogdan", 5);
$student->transferToNextCourse();
echo $student->getCourse() . "<br>";

$empl1 = new Employee("eric", "smith", 1000);
$empl2 = new Employee("kyle", "corn", 2000);
echo "Salary: " . $empl1->getSalary();
?>