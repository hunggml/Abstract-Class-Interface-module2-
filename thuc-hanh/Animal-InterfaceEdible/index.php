<?php
include_once 'AbstractClass/Animal.php';
include_once 'Animal/Chicken.php';
include_once 'Animal/Tiger.php';
include_once 'AbstractClass/Fruit.php';
include_once 'Fruit/Apple.php';
include_once 'Fruit/Orange.php';
include_once 'InterfaceClass/Edible.php';

echo "----Animal <br>";
$animals1 = new Tiger();
$animals2 = new Chicken();
echo $animals1->makeSound();
echo "<br>";
echo $animals2->makeSound();
echo "<br>";
echo $animals2->hoToEat();
echo "<br>";
echo "----Fruit <br>";
$fruitApple = new Apple();
$fruitOrange = new Orange();
echo $fruitApple->hoToEat();
echo "<br>";
echo $fruitOrange->hoToEat();

