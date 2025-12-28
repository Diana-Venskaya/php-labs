<?php
namespace App;

class Vector {
    public $x;
    public $y;

    // создания вектора с координатами
    public function __construct(float $x, float $y) {
        $this->x = $x;
        $this->y = $y;
    }

    // Метод для вычисления длины вектора
    public function length(): float {
        return sqrt($this->x ** 2 + $this->y ** 2);
    }

    // Метод для проверки, является ли вектор нулевым
    public function isZero(): bool {
        return $this->x === 0 && $this->y === 0;
    }

    // Метод для проверки перпендикулярности вектора другому вектору
    public function isPerpendicular(Vector $v): bool {
        // Векторы перпендикулярны, если их скалярное произведение равно нулю
        return ($this->x * $v->x + $this->y * $v->y) === 0;
    }

    // Метод для вывода вектора в формате (x, y)
    public function __toString(): string {
        return "(" . $this->x . ", " . $this->y . ")";
    }
}
