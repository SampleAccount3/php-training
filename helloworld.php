<!DOCTYPE html>
<html lang="en">
    <style>
        html{
            font-family: 'Montserrat', sans-serif;
        }
    </style>
<!-- the var should always be declared at the top -->
<?php
    include_once("Class.php");
    include_once("FunctionalInterface.php");
    $name = "Melares";
?>
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Main</title>
</head>
<body>
    <!-- combining the php and the html  -->
    <h1>
        <?= "Main";?>
    </h1>
    <h2>
        <?php
            $classUtilities = new classUtilities();
            echo $classUtilities->ReturnValues(22,11);
        ?>
    </h2>
    <h2>
        <?php
           $addition = new Addition();
           $subtraction = new Subtraction();
           $computation = new Computation($addition);
           $computationSub = new Computation($subtraction);
           echo $result = $computation->execute(2,1);
           echo "</br>";
           echo $result = $computationSub->execute(55,2);
        ?>
    </h2>
</body>
</html>
