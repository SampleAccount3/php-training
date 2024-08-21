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
    include_once("Abstract.php");

    $wilconWorker =  new Wilcon("Melares","24","Programmer");
    $homeDepotWorker =  new HomeDepot("Melanio", "22","Android");
    $timeDepotWorker = new TimeDepot("Flores", "44", "Job");

    $utilities = new Utilities();
    $utilities->addNewWorker($wilconWorker);
    $utilities->addNewWorker($homeDepotWorker);
    $utilities->addNewWorker($timeDepotWorker);
    $utilities->showAllWorkerInfo();
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
            
            echo $wilconWorker->showInfo();
            
        ?>
    </h2>
    <h2>
        <?php
            echo $homeDepotWorker->showInfo();
        ?>
    </h2>

    <h2>Show All Information <br>
        <?php
           echo $utilities->showAllWorkerInfo();
        ?>
    </h2>
</body>
</html>
