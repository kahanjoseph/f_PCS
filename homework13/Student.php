<?php
class Student {
    private $name;
    private $age;
    private $grade;
 
    
    function __construct($name = 'joe', $age = 100, $grade = 'Z') {
        $this->name = $name;
        $this->age = $age;
        $this->grade = $grade;
    }

    public function setGrade($grade){
        $this->grade = $grade;
    }

    public function printStudent(){
        return $this->name . ' ' . $this->age . ' ' . $this->grade;
    }
}
?>