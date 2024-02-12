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
        // !!Passing by value is default in php
        function PassByValues($num1){
            $num1++;
            echo  $num1 . '<br>'; // the output is 2
        }
        PassByValues($num1);
        echo  $num1 . '<br>'; // the output is 1
        echo '</pre>';
    ?>
    </h2>
    <h2>
        Passing the Argument by Reference
    <?php
        echo '<pre>';
        $num2 = 1;
        $num3 = 2;
        // adding & in your $parameterName can pass your arguments as Reference
        // if you pass it by reference you can modify your variable outside of your function
        // !!You can also use multiple parameters
        function PassByReference(&$num2,&$num3){
            $num2++;
            $num3++; 
            echo 'Inside the Function'.'<br>';
            echo '$num2: '.$num2.'<br>'; // the output is 2
            echo '$num3: '.$num3.'<br>'; // the output is 3
        }
        PassByReference($num2,$num3);
        echo 'Outside the Function'.'<br>';
        echo '$num2: '.$num2.'<br>'; // the output is 2
        echo '$num3: '.$num3.'<br>'; // the output is 3
        echo '</pre>';
    ?>
    </h2>
    <h2>
        Global Variables
    <?php
        echo '<pre>';
        $globalVar = 'Hello';

        function globalFunc(){
            // using the global Keyword you can access the $globalVar inside the Function
            global $globalVar;
            echo $globalVar. '<br>'; // Hello
        }
        globalFunc();
        echo $globalVar; // Hello
        echo '</pre>';
    ?>
    </h2>
    <h2>
    Static Variables
    <?php
        echo '<pre>';
        function StaticFunction(){
            // a Static variable can retain its value between function call
            // a Static variable is only accessible inside the function
            static $staticVar = 0;
            $staticVar++;
            echo $staticVar. '<br>';
        }
        StaticFunction(); // 1
        StaticFunction(); // 2
        StaticFunction(); // 3
        echo '</pre>';
    ?>
    </h2>
    <h2>
    Variadic Function
    <?php
        echo '<pre>';
        // ... the VariadicFunction can now have a Dynamic parameters
        // you can add a normal parameter before the variadic parameters
                            //Data Type
        function VariadicFunction(int...$numbers) {
            for ($i=0; $i < count($numbers); $i++) { 
                echo $numbers[$i] . '<br>';
            }
        }
        VariadicFunction(1,2,3,4,5);

        echo '</pre>';
    ?>
    </h2>
    
</body>
</html>


