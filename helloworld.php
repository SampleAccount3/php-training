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

?>
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Variables</title>
</head>
<body>
    <!-- combining the php and the html  -->
    <h1>
        <?= "Variables";?>
    </h1>
    <div>
        <h3> 
        < ?=
        <!-- method(variable); == returns the data type, character length, and value of the variable.
         Can be used in debugging-->
         var_dump($name),
         var_dump($age),
         var_dump($isGood),
         var_dump($double) ?>
        </h3>
        <h3>
            <!-- you can use the //<//?= context //?//> as a shorten echo   -->
            <!-- the var_dump function returns the data type and its value -->
            <?= var_dump($name),
            var_dump($age),
            var_dump($isGood),
            var_dump($double) ?>
        </h3>
        <h3>
            <!-- the .. contatination is equivalent to ++ in java and c# -->
            <?= '$name ='.$name." ".
            '$name1 ='.$name1." ".
            '$name2 ='.$name2." ".
            '$name3 ='.$name3?>
        </h3>

        <h3>
            <!-- this is the value of the NUMBER1 and NUMBER2 -->
            <?= $num1_num2_val?>
        </h3>
        <h3>
            <?= "Define Constant: ". MYNAME?>
        </h3>
        <h2>This is the PHP Data types</h2>
        <h3>
            <?php
            echo '<pre>';
            var_dump(PHP);
            echo '</pre>';
            ?>
        </h3>
        <h3>
            <!-- Type Casting -->
            <?php
                // float data type to int
                echo '<pre>';
                $float_number = 2.5;
                echo var_dump($float_number);
                // type Casting Syntax var1 = (data type) var2;
                // convert var2 into (data type) then pass the value as an int
                $int_number = (int) $float_number;
                echo var_dump($int_number);
                // int to String
                $string_number = (string) $int_number;
                echo var_dump($string_number);
                // float to String
                $float_number = (float) $string_number;
                echo var_dump($float_number);
                echo '</pre>';
            ?>
        </h3>
        <h3>
            <!-- data juggling -->
            <?php
                // php automatically converts your data and determine the data type --
                // by the context in which you use the variable
                $int_juggle = 2;
                $string_juggle = '2';
                echo $result_juggle = $int_juggle + $string_juggle;
            ?>
        </h3>
       
    </div>
</body>
</html>


