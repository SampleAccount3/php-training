<!DOCTYPE html>
<html lang="en">
    <style>
        html{
            font-family: 'Montserrat', sans-serif;
        }
    </style>
<!-- the var should always be declared at the top -->
<?php
    include_once("Collections.php");
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
    <h1><?=Test1::testFunction()?></h1>
    <h2></h2>
    <h2>normalArray(): <?=Collections::normalArray()?></h2>
    <h2> Accessing Array Elements: <?=Collections::accessingArrayElements(2)?></h2> 
    <h2>Adding New Array Elements: <?= Collections::addingNewArrayElements()?> </h2>
    <h2>After adding the Array: <?=Collections::normalArray()?></h2>
    <h2>Updating the array Elements<?= Collections::updatingArrayElements()?></h2>
    <h2>After updating the Array:<?=Collections::normalArray()?></h2>

</body>
</html>
