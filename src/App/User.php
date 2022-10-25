<?php
namespace App;

class User
{
    private string $name;
    private string $surname;
    private int $age;
    private string $patronymic;

    //конструктор, магічний метод, викликається при створені об'єкту
    public function __construct(string $name, string $surname, string $patronymic, int $age)
    {
        $this->name = $name;
        $this->surname = $surname;
        $this->patronymic = $patronymic;
        $this->age = $age;
    }

    //аксессор, магічний метод для встановлення значень для приватних властивостей
    public function __get($name)
    {
        if (isset($this->$name)) {
            return $this->$name;
        }
    }

    public function getName(): string
    {
        return $this->name;
    }
    

    public function getSurname(): string
    {
        return $this->surname;
    }

    public function getAge(): int
    {
        return $this->age;
    }
}
?>