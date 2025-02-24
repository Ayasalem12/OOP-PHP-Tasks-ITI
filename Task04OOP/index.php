<?php 
abstract class Person {
    private string $name;
    private string $address;

    function __construct(string $name, string $address) {
        $this->name = $name;
        $this->address = $address;
    }

    function getName(): string {
        return $this->name;
    }

    function setAddress(string $address): void {
        $this->address = $address;
    }

    function getAddress(): string {
        return $this->address;
    }

    abstract function toString(): string;
}

class Student extends Person {
    private string $program;
    private float $fee;
    private int $year;

    function __construct(string $name, string $address, string $program, float $fee, int $year) {
        parent::__construct($name, $address);
        $this->program = $program;
        $this->fee = $fee;
        $this->year = $year;
    }

    function getProgram(): string {
        return $this->program;
    }

    function setProgram(string $program): void {
        $this->program = $program;
    }

    function getFee(): float {
        return $this->fee;
    }

    function setFee(float $fee): void {
        $this->fee = $fee;
    }

    function getYear(): int {
        return $this->year;
    }

    function setYear(int $year): void {
        $this->year = $year;
    }

    function toString(): string {
        return "Name is : ".$this->getName().
               " | Address is : ".$this->getAddress().
               " | Program: ".$this->getProgram().
               " | Fee: ".$this->getFee().
               " | Year: ".$this->getYear();
    }
}

$student = new Student("Aya", "Cairo", "PHP", 4.4, 2025);
echo $student->toString();
?>
