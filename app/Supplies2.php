<?php

namespace App;

abstract class Supplies2
{

    abstract public function countCost($num);

    private string $name;
    private int $price;
    private int $id;
    private int $sale = 10;
    public array $marks = [];

    public function __construct(int $id, string $name, int $price, array $marks)
    {
        $this->id = $id;
        $this->name = $name;
        $this->price = $price;
        $this->marks = $marks;
    }

    private function countDiscountPrice(): float|int
    {
        return $this->price * (1 - $this->sale /100);
    }

    public function getPrice() :string
    {
        return $this->countDiscountPrice();
    }

    public function setPrice(int|float|string $price): void 
    {
        if (is_numeric($price) && $price >= 0) {
            $this->price = $price;
        } else {
            $this->price = 0;
        }
    }

    public function getName() :string
    {
        return $this->name;
    }

    public function setName(string $name) :void
    {
        $this -> name = $name;
    }

    public function product(): void {
        echo "<p style=\"padding: 15px; border: 1px solid black; text-align: center; max-width: 250px; \">{$this->getName()}<br> Цена: {$this->countDiscountPrice()} ₽</p>";
    }


    // public function addMark(int $mark):self {
    //     $this->marks[] = $mark;
    //     return $this;
    // }

    // public function resultMark(): string {
    //     $avg = array_sum($this->marks) / count($this->marks);
    //     $result = match (true) {
    //         $avg < 3 => "неуд",
    //         $avg < 4.5 => 'poidet',
    //         $avg < 4.5 => 'horosho',
    //         $avg >= 4.5 => 'otlichno',
    //     };
    //     return $result;
    // }
}