<?php
namespace App;

class Employee
{
    private string $name;
    private string $surname;
    private float $salary;

    public function __construct(string $name, int $surname, float $salary)
    {
        $this->name = $name;
        $this->surname = $surname;
        $this->salary = $salary;
    }

    public function getName() : string
    {
        return $this->name;
    }

    public function getSurname() : string
    {
        return $this->surname;
    }

    public function getSalary() : string
    {
        return $this->salary . '$';
    }

    public function setSalary(float $salary) : void
    {
        $this->salary = $salary;
    }
}
?>