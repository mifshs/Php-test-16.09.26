<?php

namespace App;

use Override;

class Tutor extends Student
{
    public string $group;
    
    public function __construct(string $name, int $age, array $marks = [], string $group = "")
    {
        parent::__construct($name, $age, $marks);
        $this->$group = $group;
    }

        public function learn(){
        echo "<p>Меня зовут $this->name, мне $this->age лет. Я учусь. И помогаю учиться другим</p>";
    }
}