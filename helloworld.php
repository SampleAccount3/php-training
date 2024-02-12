<!DOCTYPE html>
<html lang="en">
    <style>
        html{
            font-family: 'Montserrat', sans-serif;
        }
    </style>
<!-- the var should always be declared at the top -->
<?php
    $name = "Melares";

    // function syntax
    // function functionName($parameter){
    //     statement;
    // }
    function hello($myName){
        echo 'Hello '.$myName;
    }

    // function returnFunction(parameter){
    //     return statement/value;
    // }
    function returnFunction($myName){
        return 'Hello '. $myName; 
    }

?>
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Functions</title>
</head>
<body>
    <!-- combining the php and the html  -->
    <h1>
        <?= "Functions";?>
    </h1>
    <h2>
        Function Declaration
    <?php
        echo '<pre>';
        // declaring function syntax
        // functionName(argument);
        hello($name);
        // the returnFunction is assigining a string value to $helloName
        $helloName = returnFunction($name);
        echo "\n";
        echo $helloName;
        echo '</pre>';
    ?>
    </h2>
    <h2>
        Passing the Argument by Values
    <?php
        echo '<pre>';
        $num1 = 1;
        // the reason why the value of $num1 doesn't change is because the function makes a 
        // copy of the $num1 and modifies it inside the function
        function PassByValues($num1){
            $num1++;
            echo  $num1 . '<br>'; // the output is 2
        }
        PassByValues($num1);
        echo  $num1 . '<br>'; // the output is 1
        echo '</pre>';
    ?>
    </h2>
</body>
</html>


