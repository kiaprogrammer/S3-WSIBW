<?php
abstract class Person {
    abstract public function greet();
}

class English extends Person {
    public function greet(){
        echo "Hello!\n";
    }
}

class German extends Person {
    public function greet(){
        echo "Hallo!\n";
    }
}

class French extends Person {
    public function greet(){
        echo "Bonjour!\n";
    }
}

// Contoh penggunaan
$englishPerson = new English();
$germanPerson = new German();
$frenchPerson = new French();

$englishPerson->greet(); // Output: Hello!
$germanPerson->greet(); // Output: Hallo!
$frenchPerson->greet(); // Output: Bonjour!