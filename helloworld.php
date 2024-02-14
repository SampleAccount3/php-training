<!DOCTYPE html>
<html lang="en">
    <style>
        html{
            font-family: 'Montserrat', sans-serif;
        }
    </style>
<!-- the var should always be declared at the top -->
<?php
    // include locates your php file that you want to use in this html
    include_once ("C:/Users/ITD/Practice Web Development/php/php-training/ClassesObject.php");
?>
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Classes and Object</title>
</head>
<body>
    <!-- combining the php and the html  -->
    <h1>
        <?= "Classes and Object";?>
    </h1>
    <h2>
        <?= $name?>
        <?php
        // using an variable ($ObjectClassName) to reference the class (ClassName)
        $ObjectClassName = new ClassName('Melanio',3);
        
        // !!when accessing the properties from a class remove the $ from the property
        // $ObjectClassName->setPropsName('Melanio Flores');
        // $ObjectClassName->setPropsAge('Melanio Flores');
        // when calling a method you can use -> instead of .
        $ObjectClassName->HelloWorld();
        // var_dump($ObjectClassName);
        // echo '<br>'. $ObjectClassName->getPropsName();
        // echo '<br>'. $ObjectClassName->getPropsAge();
        // echo '<br>'. $ObjectClassName->$propsName.'<br>'. $ObjectClassName->$propsAge;
        ?>
    </h2>
</body>
</html>


