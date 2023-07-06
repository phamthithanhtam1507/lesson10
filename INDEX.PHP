<?php
// Bài 2
class Point2D {
    private $x;
    private $y;
    public function __construct($x, $y) {
        $this->x = $x;
        $this->y = $y;
    }

    public function calDistance($otherPoint) {
        $distance = sqrt(pow($this->x - $otherPoint->x, 2) + pow($this->y - $otherPoint->y, 2));
        return $distance;
    }
}

$point_1 = new Point2D(3,5);
$point_2 = new Point2D(7,11);
$distance = $point_1->calDistance($point_2);
echo "The distance between point 1 and point 2 is: " . $distance . "<br>";

// Bài 3
class IntegerArray {
    private $array; 
    public function __construct($array) {
        $this->array = $array;
    }

    public function sum() {
        return array_sum($this->array);
    }

    public function average() {
        $sum = $this->sum();
        $count = count($this->array);
        return $sum / $count;
    }

    public function max() {
        return max($this->array);
    }
}

$arrayObj = new IntegerArray([5, 10, 3, 8, 2]);

$sum = $arrayObj->sum();
echo "Sum: " . $sum . "<br>";

$average = $arrayObj->average();
echo "Average: " . $average . "<br>";

$max = $arrayObj->max();
echo "Maximum value: " . $max . "<br>";

// Bài 4
class Clock {
    private $hour;
    private $minute;
    private $second;

    public function __construct($hour, $minute, $second) {
        $this->hour = $hour;
        $this->minute = $minute;
        $this->second = $second;
    }

    public function displayTime() {
        $form = sprintf("%02d:%02d:%02d",$this->hour,$this->minute,$this->second);
        return $form;
    }

    public function increaseTime() {
        $this->second++;
        if ($this->second >= 60) {
            $this->minute++;
            $this->second = 0;
        }
        if ($this->minute >= 60) {
            $this->hour++;
            $this->minute = 0;
        } 
        if ($this->hour >= 24 ) {
            $this->hour = 0;
        }
    }
}

$clock = new Clock(12, 59, 59);

echo "Current time: " . $clock->displayTime() . "<br>";
$clock->increaseTime();
echo "Updated time: " . $clock->displayTime() . "<br>";

// Bài 5
class Student {
    private $ID;
    private $fullName;
    public function __construct($ID, $fullName) {
        $this->ID = $ID;
        $this->fullName = $fullName;
    }

    public function getFullName() {
        return $this->fullName;
    }

    public function getID() {
        return $this->ID;
    }
}

class StudentList {
    private $list;

    public function __construct() {
        $this->list = array();
    }

    public function addStudent($student) {
        $this->list[] = $student;
    }

    public function getList() {
        return $this->list;
    }
}

$student_1 = new Student("S001", "John Doe");
$student_2 = new Student("S002", "Just Me");

$studentList = new StudentList();

$studentList->addStudent($student_1);
$studentList->addStudent($student_2);

$students = $studentList->getList();

foreach ($students as $student) {
    echo "ID: " . $student->getID() . "<br>";
    echo "Full Name: " . $student->getFullName() . "<br>";
}

// Bài 6
class Car {
    private $company;
    private $color;
    private $yearOfProduction;

    public function __construct($company, $color, $yearOfProduction) {
        $this->company = $company;
        $this->color = $color;
        $this->yearOfProduction = $yearOfProduction;

    }

    public function getCompany() {
        return $this->company;
    }

    public function getColor() {
        return $this->color;
    }

    public function getYearOfProduction() {
        return $this->yearOfProduction;
    }
}

$car = new Car('Volvo', 'Red', '2023');
echo "Company: {$car->getCompany()}<br>Color: {$car->getColor()}<br>Year of production: {$car->getYearOfProduction()}<br>";

// Bài 7
class Fraction {
    private $numerator;
    private $denominator;

    public function __construct($numerator, $denominator) {
        $this->numerator = $numerator;
        $this->denominator = $denominator;
    }

    public function sum($newFraction) {
        $newNumerator = $this->numerator * $newFraction->denominator + $this->denominator * $newFraction->numerator;
        $newDenominator = $this->denominator * $newFraction->denominator;
        return new Fraction($newNumerator, $newDenominator);
    }

    public function subtract($newFraction) {
        $newNumerator = $this->numerator * $newFraction->denominator - $this->denominator * $newFraction->numerator;
        $newDenominator = $this->denominator * $newFraction->denominator;
        return new Fraction($newNumerator, $newDenominator);
    }

    public function multiply($newFraction) {
        $newNumerator = $this->numerator * $newFraction->numerator;
        $newDenominator = $this->denominator * $newFraction->denominator;
        return new Fraction($newNumerator, $newDenominator);
    }

    public function divide($newFraction) {
        $newNumerator = $this->numerator * $newFraction->denominator;
        $newDenominator = $this->denominator * $newFraction->numerator;
        return new Fraction($newNumerator, $newDenominator);
    }

    public function toString() {
        return $this->numerator . '/' . $this->denominator;
    }
}

$fraction_1 = new Fraction(1, 2);
$fraction_2 = new Fraction(3, 4);

$sum = $fraction_1->sum($fraction_2);
echo "Sum: " . $sum->toString() . "<br>";

$difference = $fraction_1->subtract($fraction_2);
echo "Subtract: " . $difference->toString() . "<br>";

$product = $fraction_1->multiply($fraction_2);
echo "Multiply: " . $product->toString() . "<br>";

$quotient = $fraction_1->divide($fraction_2);
echo "Divide: " . $quotient->toString() . "<br>";

// Bài 8
class Person {
    private $name;
    private $age;
    private $address;

    public function __construct($name, $age, $address) {
        $this->name = $name;
        $this->age = $age;
        $this->address = $address;
    }
    public function getName() {
        return $this->name;
    }

    public function getAge() {
        return $this->age;
    }

    public function getAddress() {
        return $this->address;
    }
}

$person = new Person('Just Me', '21', 'Viet Nam');
echo "Name: {$person->getName()}<br>Age: {$person->getAge()}<br>Address: {$person->getAddress()}<br>";

// Bài 9
class Product {
    private $name;
    private $price;
    private $description;

    public function __construct($name, $price, $description) {
        $this->name = $name;
        $this->price = $price;
        $this->description = $description;
    }

    public function getName() {
        return $this->name;
    }

    public function getPrice() {
        return $this->price;
    }

    public function getDescription() {
        return $this->description;
    }
}

$product = new Product('Just Me', '21', 'Viet Nam');
echo "Name: {$product->getName()}<br>Age: {$product->getPrice()}<br>Address: {$product->getDescription()}<br>";

// Bài 10
class RoomOrder {
    private $name;
    private $checkInDate;
    private $numberOfNights;   

    public function __construct($name, $checkInDate, $numberOfNights) {
        $this->name = $name;
        $this->checkInDate = $checkInDate;
        $this->numberOfNights = $numberOfNights;
    }

    public function calculateTotalAmount($roomPricePerNight) {
        return $this->numberOfNights * $roomPricePerNight;
    }
}

$booking = new RoomOrder("John Doe", "2023-07-20", 3);
$roomPricePerNight = 100;
$totalAmount = $booking->calculateTotalAmount($roomPricePerNight);
echo "Total amount to be paid: $" . $totalAmount;