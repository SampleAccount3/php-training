<!DOCTYPE html>
<html lang="en">
<?php
    include "./TypeHints.php";
    $name = "Melares";
    $result= null;
    $sample_object = new Sample();
?>
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Document</title>
    </head>
    <body>
        <h1>
            <!-- Simple Method Call -->
            <?php
                echo $sample_object->show_hello(); 
            ?>
        </h1>
        <h1>
            <!-- Class reference / Method Reference-->
            <?php
                echo Sample::static_show_hello(); 
            ?>
        </h1>
        <!-- Different Data Types -->
        <h1><?php echo $result = Sample::dynamic_type_sample(1,2);?></h1>
        <h1><?php echo $result = Sample::dynamic_type_sample(1.0,2.2);?></h1>
        <h1><?php echo $result = Sample::dynamic_type_sample(true,false);?></h1>
        <h1><?php echo $result = Sample::dynamic_type_sample("1","2");?></h1>

        <!-- You can specify the data types of parameters -->
        <h1><?php echo $result = Sample::int_type_sample(2,5);?></h1>
        <h1><?php echo var_dump($result = Sample::string_type_sample("1","66"));?></h1>

    </body>
</html>
