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
</body>
</html>


