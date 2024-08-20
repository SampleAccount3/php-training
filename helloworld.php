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
        <?="Main";?>
    </h1>
    <h1><?=Test1::testFunction()?></h1>
    <h2></h2>
    <h2>normalArray(): <?=Collections::normalArray()?></h2>
    <h2> Accessing Array Elements: <?=Collections::accessingArrayElements(2)?></h2> 
    <h2>Adding New Array Elements: <?= Collections::addingNewArrayElements()?> </h2>
    <h2>After adding the Array: <?=Collections::normalArray()?></h2>
    <h2>Updating the array Elements<?= Collections::updatingArrayElements()?></h2>
    <h2>After updating the Array:<?=Collections::normalArray()?></h2>
    <h2>Removed the array Element(index 3) 4<?= Collections::removingArrayElement()?></h2>
    <h2>After Removing the array Elements<?= Collections::normalArray()?></h2>
    <h2>The total count of Array Elements: <?= Collections::countingTheArrayElement()?></h2>
    <h1>Associative arrays </h1>
    <h2><?= CollectionAssocArray::addingElementsInAssocArray()?></h2>
    <h2>Accessing Associative Array: </h2>
    <h2>Accessing Name: <?= CollectionAssocArray::accessingAssocArrayElement("Name")?></h2>
    <h2>Accessing Job: <?= CollectionAssocArray::accessingAssocArrayElement("Job")?></h2>
    <h2>Accessing Age: <?= CollectionAssocArray::accessingAssocArrayElement("Age")?></h2>
    <h2>Accessing Sample: <?= CollectionAssocArray::accessingAssocArrayElement("Sample")?></h2>
    <h2>For Each Assoc Array: </br> <?= CollectionAssocArray::forEachAssocArray()?>
    <h2>For Each Assoc With Elements: </br> <?= CollectionAssocArray::forEachAssocArray2()?>
    <h1>Array Methods</h1>
    <h2><?= ArrayMethods::printArray()?></h2>
    <h2>Prepending a new Elements <?=ArrayMethods::prependArray()?></h2>
    <h2><?= ArrayMethods::printAssocArray()?></h2>
    <h2>Prepending a new Assoc Elements <?=ArrayMethods::prependAssocArray()?></h2>
    
    
</body>
</html>
