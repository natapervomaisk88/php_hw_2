<?php
namespace App;

class Arr
{
    private array $numbers = [];
    public function add(array $data) : void
    {
        foreach($data as $number)
        {
            if(is_numeric($number))
            {
                array_push($this->numbers,$number);
            }
        }
    }

    public function getAvg() : float
    {
        $avg = 0;
        if(count($this->numbers))
        {
            $sum = 0;
            foreach($this->numbers as $number)
            {
                $sum+=$number;
            }
            $avg = $sum/count($this->numbers);
        }
        return $avg;
    }
    
}
?>