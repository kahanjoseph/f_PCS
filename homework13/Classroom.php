<?php
spl_autoload_register(function ($class_name) {
    include $class_name . '.php';
});

class Classroom{
    private $students = [];

    public function addStudent($name, $age, $grade){
        $this->students[$name] = new Student($name, $age, $grade);
    }

    public function echoStudent($name){
        return $this->students[$name];
    }
}
?>