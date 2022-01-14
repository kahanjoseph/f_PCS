<?php
require('Classroom.php');
$classroom = new Classroom;

$address1 = new Address();
$address1->print();

$tembel = $classroom->addStudent('Tembel', 5, 'Z');
$toPrint = $classroom->echoStudent('Tembel');

$joe = new Student();
$joe->getAddress()->print();
$joe->printStudent();
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <p><?php print_r($toPrint); ?></p>
</body>
</html>