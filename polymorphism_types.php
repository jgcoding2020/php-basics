<?php
// Demonstration of polymorphism in PHP

// Superclass (parent class)
class Animal {
    public function speak() {
        return "Animal speaks";
    }
}

// Subclass 1
class Dog extends Animal {
    public function speak() {
        return "Dog barks";
    }
}

// Subclass 2
class Cat extends Animal {
    public function speak() {
        return "Cat meows";
    }
}

// Subclass 3
class Bird extends Animal {
    public function speak() {
        return "Bird chirps";
    }
}

// Function that demonstrates polymorphism
function animalTalk(Animal $animal) {
    return $animal->speak();
}

// Create instances of different animals
$dog = new Dog();
$cat = new Cat();
$bird = new Bird();

// Demonstrate polymorphism
echo animalTalk($dog) . "\n";  // Outputs: "Dog barks"
echo animalTalk($cat) . "\n";  // Outputs: "Cat meows"
echo animalTalk($bird) . "\n"; // Outputs: "Bird chirps"

?>