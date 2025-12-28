<?php
require 'src/MagicClass.php';

use App\MagicClass;

$obj = new MagicClass();
$obj->test = 1;
echo $obj;

// классы из папки src
require 'src/Point.php';
require 'src/Vector.php';

use App\Point;
use App\Vector;

$T1 = new Point(2, 3);

$V1 = new Vector(4, 5);

$V2 = new Vector(0, 0);

// Создаём вектор V3, перпендикулярный V1 (-y, x))
$V3 = new Vector(-$V1->y, $V1->x);

echo "Длина V1: " . $V1->length() . "<br>";
echo "Длина V2: " . $V2->length() . "<br>";
echo "Длина V3: " . $V3->length() . "<br>";

// Проверка перпендикулярны ли V3 и V1
echo "V3 перпендикулярен V1? " . ($V3->isPerpendicular($V1) ? "Да" : "Нет") . "<br>";

// Перенос точки T1 на вектор V1
$T1->moveX($V1->x);
$T1->moveY($V1->y);

// Выводим новую позицию точки после переноса
echo "Новая позиция T1 после переноса на V1: " . $T1;
