<?php
abstract class Person {
    abstract public function greet();
}

class English extends Person {
    public function greet() {
        echo "Hello!\n";
    }
}

class German extends Person {
    public function greet() {
        echo "Hallo!\n";
    }
}

class French extends Person {
    public function greet() {
        echo "Bonjour!\n";
    }
}

// Contoh penggunaan:
$person1 = new English();
$person2 = new German();
$person3 = new French();

$person1->greet(); // Output: Hello!
$person2->greet(); // Output: Hallo!
$person3->greet(); // Output: Bonjour!


interface Learnable {
    public function learn();
}

abstract class Student extends Person implements Learnable {
    abstract public function study();
}

class Undergraduate extends Student {
    public function greet() {
        echo "Hi, I'm an undergraduate!\n";
    }

    public function study() {
        echo "I'm studying for my exams.\n";
    }

    public function learn() {
        echo "I'm learning new things every day.\n";
    }
}

class Graduate extends Student {
    public function greet() {
        echo "Hello, I'm a graduate student.\n";
    }

    public function study() {
        echo "I'm conducting research.\n";
    }

    public function learn() {
        echo "I'm specializing in my field.\n";
    }
}

class Teacher extends Person {
    public function greet() {
        echo "Good morning, students!\n";
    }

    public function teach() {
        echo "I'm teaching a class.\n";
    }
}

// Contoh penggunaan:
$student1 = new Undergraduate();
$student2 = new Graduate();
$teacher = new Teacher();

$student1->greet(); // Output: Hi, I'm an undergraduate!
$student1->study(); // Output: I'm studying for my exams.
$student1->learn(); // Output: I'm learning new things every day.

$teacher->greet(); // Output: Good morning, students!
$teacher->teach(); // Output: I'm teaching a class.