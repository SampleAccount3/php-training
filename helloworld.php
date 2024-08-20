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
    $objSampleClassVariablesThis = new SampleClassVariablesThis();
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
    <h2>Global Variable:<?= say();?></h2>
    <h1>Static Function:<?= SampleClass::staticFunction();?></h1>
    <h1>
        Static Variable:
        <?= StaticVariables::getCounter() ?>
        <?= StaticVariables::getCounter() ?>
        <?= StaticVariables::getCounter() ?>
        <?= StaticVariables::getCounter2() ?>
        <?= StaticVariables::getCounter2() ?> 
        <?= StaticVariables::getCounter2() ?>
        <?= StaticVariables::getCounter2() ?>
    </h1>
    <h1>
        Function Parameter:
        <?= FunctionParameters::sum([10,10,30,50,2,4,1]);?>
    </h1>
    
    <h1>
        Displaying the class internal variable:
        <?=SampleClassVariables::sample1()?>
    </h1>
    <h1>
    Using "this" to access the class internal variable: 
        <?= $objSampleClassVariablesThis->sample1()?> </h1>
</body>
</html>