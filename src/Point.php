<?php
namespace App;

class Point {
    public $x;
    public $y;

    // создание точки с координатами
    public function __construct(float $x, float $y) {
        $this->x = $x;
        $this->y = $y;
    }

    // Перенос точки по оси X 
    public function moveX(float $dx) {
        $this->x += $dx;
    }

    // Перенос точки по оси Y
    public function moveY(float $dy) {
        $this->y += $dy;
    }

    // Метод для вывода точки в формате (x, y)
    public function __toString(): string {
        return "(" . $this->x . ", " . $this->y . ")";
    }
}
