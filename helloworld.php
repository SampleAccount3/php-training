<!DOCTYPE html>
<html lang="en">
    <style>
        html{
            font-family: 'Montserrat', sans-serif;
        }
    </style>
<!-- the var should always be declared at the top -->
<?php
    include_once("VariableScopes.php");
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
        <?= say();?>
    </h2>
    <h1>
        <?= SampleClass::staticFunction();?>
    </h1>
    <h1>
        <?= StaticVariables::getCounter() ?>
        <?= StaticVariables::getCounter() ?>
        <?= StaticVariables::getCounter() ?>
        <?= StaticVariables::getCounter2() ?>
        <?= StaticVariables::getCounter2() ?> 
        <?= StaticVariables::getCounter2() ?>
        <?= StaticVariables::getCounter2() ?>
    </h1>
    <h1>
        <?= FunctionParameters::sum([10,10,30,50]);?>
    </h1>
</body>
</html>