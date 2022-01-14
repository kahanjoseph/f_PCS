<?php
class Student {
    private $name;
    private $age;
    private $grade;
    private Address $address;

    function getAddress(){
        return $this->address;
    }

    function __construct($name = 'joe', $age = 100, $grade = 'Z') {
        $this->name = $name;
        $this->age = $age;
        $this->grade = $grade;
        $this->address = new address();
    }

    public function setGrade($grade){
        $this->grade = $grade;
    }

    public function printStudent(){
        echo $this->name . ' ' . $this->age . ' ' . $this->grade;
    }
}
?>