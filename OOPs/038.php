<?php

class College{

    // protected string $name = 'Aman';

    public function details(string $course, int $year) :void
    {
        echo 'Course is'.$course.'and year is : '.$year;
    }
}

class myClass extends College
{
    
    public function details(string $course, int $year, int $roll) :void
    
    {
        //  string $name = 'Aman';
        echo 'Course is' . $course . 'and year is : ' . $year . 'roll no. is : ' . $roll;
    }
}

$obj = new myClass();

echo $obj->details('B.tech', 2023,02);