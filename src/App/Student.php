<?php
namespace App;

class Student
{
    private string $name;
    private int $course;
    private const MAX_COURSE = 5, MIN_COURSE = 1;

    private function isTranslatable() : bool
    {
        if($this->course+1<=self::MAX_COURSE)
            return true;
        return false;
    }

    public function __construct(string $name, int $course)
    {
        $this->name = $name;
        if($course>=self::MIN_COURSE && $course<=self::MAX_COURSE)
        {
            $this->course = $course;
        }
    }

    public function transferToNextCourse() : void
    {
        if($this->isTranslatable())
        {
            $this->course++;
        }
    }

    
    public function setName(string $name) : void
    {
        $this->name = $name;
    }

    public function getName() : string
    {
        return $this->name;
    }

    public function setCourse(int $course) : void
    {
        if($this->isTranslatable())
        {
            $this->course = $course;
        }
    }

    public function getCourse() : int
    {
        return $this->course;
    }
}
?>