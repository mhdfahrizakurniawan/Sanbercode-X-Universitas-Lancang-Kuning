<?php
require_once 'animal.php';

class Ape extends Animal {
    public $legs = 2; // Overriding the legs property for Ape

    public function yell() {
        echo "Yell : Auooo";
    }
}
?>