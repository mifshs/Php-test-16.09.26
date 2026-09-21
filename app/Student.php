<?php
namespace App;

class Student{
    public string $name;
    protected int $age = 18;
    public array $marks = [];

    public function __construct(string $name,int $age,array $marks = [])
    {
        $this->name = $name;
        $this->age = $age;
        $this->marks = $marks;
    }

    public function getAge():int{
        return $this->age;
    }

    public function setAge(int $age):void{
        if($age >= 16 && $age <=60)
        {
            $this->age = $age;
        }
    }

    public function learn(){
        echo "<p>Меня зовут $this->name, мне $this->age лет. Я учусь</p>";
    }

    public function addMark(int $mark):self
    {
        $this->marks[] = $mark;
        return $this;
    }

    public function resultMark(): string
    {
        $avg = array_sum($this->marks) / count($this->marks);
        $result = match (true) {
            $avg < 3 => "неуд",
            $avg < 4.5 => 'poidet',
            $avg < 4.5 => 'horosho',
            $avg >= 4.5 => 'otlichno',
        };
        return $result;
    }
} 