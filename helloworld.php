<?php
declare(strict_types=1);
?>
<!DOCTYPE html>
<html lang="en">
    <style>
        html{font-family: 'Montserrat', sans-serif;}
    </style>
<!-- the var should always be declared at the top -->

<?php
include_once("variables.php");
// Strict data types

// The variable in php is dynamic you can assign any data types without having an error
    $name = "Melares";
    $age = 23;
    $isGood = true;
    $double = 1.0;
    $double = "sample";
    // assigning a value in a multple variables
    // the  $name1 $name2 $name3 can inherit the value of $name
    $name1 = $name2 = $name3 = $name;

    // declaring constant variables
    const NUMBER_1 = 1;
    const NUMBER_2 = 2;
    $num1_num2_val = NUMBER_1 + NUMBER_2;

    // declaring constant arrays 
    const RGB = ['red','blue','green'];
    // a variable is Scalar if it holds the value of boolean, int, float, and string
    const SCALAR = [
        'Boolean',
        'Integer',
        'Float',
        'String'];
    // a variable is a compound if it contains more than 1 value
    const COMPOUND  = [
        'Array',
        'Object'
    ];
    // a variable that holds a NULL or a external Resource file
    const SPECIAL = [
        'NULL',
        'Resource'
    ];
    const PHP = [
        SCALAR,
        COMPOUND,
        SPECIAL];
    // defining variables
    // method('CONSTANT_NAME', 'constantvalue');
    define('MYNAME', 'Melanio');

    // the difference between the Define method and the const
    // is define() defines a constant at runtime
    // the const defines at compile time

    // method(variable); == returns the data type, character length, and value of the variable
    // var_dump($name),
    // die function terminates the script and it will not read the next line
    // die();

    $passByReferenceSample = 1;
    $passByValue = 1;
?>
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <!-- combining the php and the html  -->
    <h1>
        <?= "Hello World!!! $name";?>
    </h1>
    <h1>Pass by reference: <?= varClass::passByReference($passByReferenceSample)?></h1> <!-- 2 -->
    <h1>Pass by value: <?= varClass::passByValue($passByValue)?></h1> <!-- 5 -->
    <h1>Pass by Reference Var <?= $passByReferenceSample?></h1> <!-- 3-->
    <h1>Pass by value Var <?= $passByValue?></h1> <!-- 1 -->
</body>
</html>