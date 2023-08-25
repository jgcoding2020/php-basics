<?php
// Demonstration of classes and objects

// 1. Creating a Class
class Person {
    // Properties (Attributes)
    public $name;
    public $age;

    // Constructor
    public function __construct($name, $age) {
        $this->name = $name;
        $this->age = $age;
    }

    // Methods (Functions)
    public function greet() {
        return "Hello, my name is {$this->name} and I am {$this->age} years old.";
    }
}

// 2. Creating Objects
$person1 = new Person("John", 30);
$person2 = new Person("Alice", 25);

// 3. Accessing Properties and Calling Methods
echo "3. Accessing Properties and Calling Methods:\n";
echo $person1->greet() . "\n";
echo $person2->greet() . "\n";

// 4. Inheritance
class Student extends Person {
    public $studentId;

    public function __construct($name, $age, $studentId) {
        parent::__construct($name, $age);
        $this->studentId = $studentId;
    }

    public function study() {
        return "{$this->name} is studying.";
    }
}

$student = new Student("Bob", 22, "S12345");
echo "4. Inheritance:\n";
echo $student->greet() . "\n";
echo $student->study() . "\n";

// 5. Encapsulation
class BankAccount {
    private $balance = 0;

    public function deposit($amount) {
        $this->balance += $amount;
    }

    public function withdraw($amount) {
        if ($amount <= $this->balance) {
            $this->balance -= $amount;
        } else {
            echo "Insufficient funds.\n";
        }
    }

    public function getBalance() {
        return $this->balance;
    }
}

$account = new BankAccount();
$account->deposit(1000);
$account->withdraw(500);

echo "5. Encapsulation:\n";
echo "Balance: $" . $account->getBalance() . "\n";
?>
