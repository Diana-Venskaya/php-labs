<?php
namespace App;

class MagicClass {
    public function __construct() {
        echo "__construct<br>";
    }

    public function __destruct() {
        echo "__destruct<br>";
    }

    public function __toString() {
        return "__toString<br>";
    }

    public function __get($name) {
        echo "__get: $name<br>";
    }

    public function __set($name, $value) {
        echo "__set: $name<br>";
    }
}
