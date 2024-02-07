<!DOCTYPE html>
<html lang="en">
    <style>
        html{font-family: 'Montserrat', sans-serif;}
    </style>
<!-- the var should always be declared at the top -->
<?php
// The variable in php is dynamic you can assign any data types without having an error
    $name = "Melares";
    $age = 23;
    $isGood = true;
    $double = 1.0;
    // assigning a value in a multple variables
    // the  $name1 $name2 $name3 can inherit the value of $name
    $name1 = $name2 = $name3 = $name
?>
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Variables</title>
</head>
<body>
    <!-- combining the php and the html  -->
    <h1>
        <?= "Variable Declaration";?>
    </h1>
    <div>
        <h3>
        < ?= var_dump($name), var_dump($age),var_dump($isGood),var_dump($double) ?>
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
            <!-- the .. contatination is equivalent to ++ in java in c# -->
            <?= '$name ='.$name." ".
            '$name1 ='.$name1." ".
            '$name2 ='.$name2." ".
            '$name3 ='.$name3?>
        </h3>
       
    </div>
</body>
</html>


