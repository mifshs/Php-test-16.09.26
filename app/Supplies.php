<?php
namespace App;

class Supplies
{
    private string $name;
    private int $price;
    private int $id;
    private int $sale = 10;
    public array $marks = [];

    public function __construct(int $id, string $name,int $sale, string $price, array $marks)
    {
        $this->id = $id;
        $this->sale = $sale;
        $this->name = $name;
        $this->price = $price;
        $this->marks = $marks;
    }

    private function countDiscountPrice(): float
    {
        $this->$sale = 100 - $this->$sale;
    }

    public function getPrice() :string
    {
        return $this->price . '₽';
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
        echo "<p style=\"padding: 15px; border: 1px solid black; text-align: center; max-width: 250px; \">{$this->name}<br> Цена: {$this->price} ₽</p>";
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