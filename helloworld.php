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
?>
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Control Flow</title>
</head>
<body>
    <!-- combining the php and the html  -->
    <h1>
        <?= "Control Flow";?>
    </h1>
    <h3>
        <?php
        // assignment operator '=' syntax
        // variable_name = expression;
        echo '<pre>';
        $age = 23;
        $age_plus5 = 5;
        $age += $age_plus5;
        echo "$age \n";
        // concatination operator '.' 
        $string_fname = 'Melanio';
        $string_lname = 'Flores';

        $string_fullname = $string_fname ." ". $string_lname;
        echo $string_fullname;
        echo '</pre>';
        ?>
    </h3>
    <h3>
        Comparison Operators
        <?php
        echo '<pre>';
            // == Returns true if both operands has the same value
            echo "== Equal to \n";
            echo "!=,<> Not Equal to \n";
            // === Returns true if both operands has the same data types and equal
            echo "=== Identical to \n";
            echo "!== Not Identical to \n";
            echo "> Greater than \n";
            echo ">= Greater than or equal to\n";
            echo "< Less than \n"; 
            echo "<= Less than or equal to  \n"; 
        echo '</pre>';
        ?>
    </h3>

    <h3>
        AND Operators
        <?php
        echo '<pre>';
        // if 1 expression is false returns false
            echo "expression1 = true && expression2 = true: returns true \n";
            echo "expression1 = false && expression2 = true: returns false \n";
            echo "expression1 = true && expression2 = false: returns false \n";
            echo "expression1 = false && expression2 = false: returns true \n";
        echo '</pre>';
        ?>
    </h3>

    <h3>
        AND Short-circuiting
        <?php
        echo '<pre>';
            $isShow = false;
            $isShow && print('It Shows: false');
            $isShow = true;
            $isShow && print('It Shows: true');
        echo '</pre>';
        ?>
    </h3>

    <h3>
        OR Operators
        <?php
        echo '<pre>';
        // if the 1 expression value is equal to true return true
            echo "expression1 = true && expression2 = true: returns true \n";
            echo "expression1 = false && expression2 = true: returns true \n";
            echo "expression1 = true && expression2 = false: returns true \n";
            echo "expression1 = false && expression2 = false: returns false \n";

            $isTrue = true;
            $isFalse = false;
            $isOr =  $isFalse|| $isTrue;
            var_dump($isOr);
        echo '</pre>';
        ?>
    </h3>

    <h3>
        OR Short-circuiting
        <?php
        echo '<pre>';
            $isShow = false;
            $isShow || print('It Shows: false');
            $isShow = true;
            // if the isShow is true it doesn't read the next operand hence, it didn't show the print
            $isShow || print('It Shows: true');
        echo '</pre>';
        ?>
    </h3>

    <h3>
        NOT(!) Operator
        <?php
        echo '<pre>';
            // not operator only accepts 1 operand and turns it into opposite value 
            echo "expression1 = true !expression1 = false \n";
            echo "expression1 = false !expression1 = true \n";
        echo '</pre>';
        ?>
    </h3>

    <h3>
        If 
        <?php
        echo '<pre>';
            $isGood = true;
            // if(true) run this statement;
            if($isGood) echo 'Display this if $isGood is true if not ignore this statement'; 
        echo '</pre>';
        ?>
    </h3>

    <h3>
        Switch
        <?php
        echo '<pre>';
        // switch syntax
        // switch (expression) {
        //     case value1:
        //         // code block 1
        //         break;
        //     case value2:
        //         // code block 2
        //         break;
        //     case value3:
        //         // code block 3
        //         break;
        //     default:
        //         // default code block
        // }

        // switch syntax (combining cases)
        // switch (expression) {
        //     case value1:
        //         // code block 1
        //         break;
        //     "The Case value 2 and 3 will have the same output"
        //     case value2:
        //     case value3:
        //         // code block 3
        //         break;
        //     default:
        //         // default code block
        // }
        echo '</pre>';
        ?>
    </h3>

    <h3>
        For Loop
        <?php
        echo '<pre>';
            // if the condition is true continue to loop until the condition is fulfilled
            // for (start; condition; increment){
            //     statement;
            // }
        echo '</pre>';
        ?>
    </h3>

    <h3>
        While Loop
        <?php
        echo '<pre>';
            // while the expression is true continue the execution of while loop 
            // if the expression is false the loop ends 
            // while(expression){
            //     statement;
            // }
        echo '</pre>';
        ?>
    </h3>

    <h3>
        Do While Loop
        <?php
        echo '<pre>';
            // the do while loop executes the statement at least once even if the expression is false
            // while the expression is true continue the execution of while loop 
            // if the expression is false the loop ends 
            // do{
            //     statement;
            // }while (expression);
        echo '</pre>';
        ?>
    </h3>
    <h3>
        Break
        <?php
        echo '<pre>';
            // the break statement immediately breaks out of the loop
            // while(expression){
            //     statement;
            //     break;
            // }
            // sample of using with if
            // while(expression){
            //      statement;
            //      if(expression){
            //          break;
            //      }
            // }
        echo '</pre>';
        ?>
    </h3>

    <h3>
        Continue
        <?php
        echo '<pre>';
                // the Continue statement skips the current Loop iteration 
                // while(expression){
                //     statement;
                //     continue;
                // }
        echo '</pre>';
        ?>
    </h3>

</body>
</html>


