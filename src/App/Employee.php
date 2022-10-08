<?php
namespace App;

class Employee
{
    private string $name;
    private int $age;
    private float $salary;
    private const MIN = 1;
    private const MAX = 100;
    private const MAX_AGE = 18;

    private function isAgeCorrect() : bool
    {
        if($this->age>=self::MIN && $this->age<=self::MAX)
            return true;
        return false;
    }

    public function __construct(string $name, int $age, float $salary)
    {
        $this->name = $name;
        $this->age = $age;
        $this->salary = $salary;
    }

    public function getName() : string
    {
        return $this->name;
    }

    public function getAge() : int
    {
        return $this->age;
    }

    public function getSalary() : string
    {
        return $this->salary . '$';
    }

    
    public function setName(string $name) : void
    {
        $this->name = $name;
    }

    public function setAge(int $age) : void
    {
        if($this->isAgeCorrect())
            $this->age = $age;
    }

    public function setSalary(float $salary) : void
    {
        $this->salary = $salary;
    }

    public function checkAge() : bool
    {
        if($this->age > self::MAX_AGE)
            return true;
        return false;
    }

    public function doubleSalary() : float
    {
        return $this->salary*2;
    }
}
?>