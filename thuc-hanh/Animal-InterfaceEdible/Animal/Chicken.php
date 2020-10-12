<?php
include_once 'InterfaceClass/Edible.php';
class Chicken extends Animal implements Edible {
    public function makeSound()
    {
       return "Chicken : cụ tác :))";
    }

    public function hoToEat()
    {
        return "Chicken : could be fried";
    }
}