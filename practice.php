<?php

    // variable
    $a = 2;
    $a = 'a';
    $b = 'b';

    // echo $a . $b;

    $c = true;
    $c = false;

    // arrays
    // $names = [
    //     'name' => 'Hamza', 'age' => 20, 'class' => 10
    // ];

    // $names['name'];
    // $names['age'];
    // $names['class'];

    $names = ['Hamza', 'Salman', 'Aziz'];

    // loops
    // for, while, do while, foreach

    // for($i = 0; $i < 3; $i++) {
    //     echo $names[$i];
    //     // echo '\n';
    // }

    // foreach($names as $name) {
    //     echo $name;
    // }

    // multi dimensional array
    $students = [
        [
            'name' => 'Aziz',
            'age' => 20,
            'class' => 10
        ],
        [
            'name' => 'Hamza',
            'age' => 18,
            'class' => 8
        ],
        [
            'name' => 'Salman',
            'age' => 17,
            'class' => 7
        ],
    ];

    // echo $students[0]['age'];

    // foreach($students as $student) {
    //     echo 'Name is : ' . $student['name'] . '<br>';
    //     echo 'Age is : ' . $student['age'] . '<br>';
    //     echo 'Class is : ' . $student['class'] . '<br>';
    // }

    // operators - arithmetic and assignment
    //+ , -, /, *, =, +=,

    $a = 20; $b = 30;

    $a *= $b;
    $a = $a * $b;
    // echo $a;

    // $a * $b;

    // $a / $b;

    // $a - $b;

    // $a += $b;

    // $a *= $b;


    // conditional statments - if, elseif and switch, match
    $cgpa = 1;

    // if($cgpa >= 3) {
    //     echo 'grade A';
    // } elseif($cgpa >= 2) {
    //     echo 'grade B';
    // } elseif($cgpa > 1) {
    //     echo 'grade C';
    // } else {
    //     echo 'failed';
    // }

    // switch ($cgpa) {
    //     case 3:
    //         echo 'Grade A';
    //     break;
    //     case 2:
    //         echo 'Grade C';
    //     break;
    //     default:
    //         echo 'Failed';
    // }

    // $grade = match($cgpa) {
    //     3 => 'Grade A',
    //     2 => 'Grade C',
    //     default => 'Failed'
    // };

    // echo $grade;

    function operation($value1, $value2, $operation) {
        if($operation == 'sum') {
            return $value1 + $value2;
        } else if($operation == 'multiply') {
            return $value1 * $value2;
        } else if($operation == 'divide') {
            return $value1 / $value2;
        } else if($operation == 'minus') {
            return $value1 - $value2;
        }
    }

    $c = operation(5, 2, 'minus');
    echo $c;

    function sum() {

    }

    function subtract() {

    }

    function multiply() {

    }

    function divide() {

    }

    $value = match($operation) {
        '+' => sum($a, $b),
        '-' => subtract($a, $b),
        '*' => multiply($a, $b),
        '/' => divide($a, $b)
    };

    echo $value;
?>
