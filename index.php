<?php

require_once __DIR__ . "/function.php";

$lunghezza = isset($_GET["lunghezza"]) ? $_GET["lunghezza"] : null;

if($lunghezza !== null && is_numeric($lunghezza)){

    $lunghezza = intval($lunghezza);
    $psw = generaPsw($lunghezza);

}


?>



<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
    </head>
    <title>Document</title>
</head>
<body>

<div class="container">
    
    <label for="lunghezza" class="form-label">Generatore di password quasi sicure</label>
    <form action="" method="GET">
        <div class="container">

            <div class="col-12 row justify-content-between align-middle py-2">
                <p class="col-4 my-auto">   
                    Lunghezza password: 
                </p>
                <input type="number" name="lunghezza" id="lunghezza" class="col-4" min="6" max="16">
            </div>
                
            <button class="col-auto  ms-2" type="submit">Genera</button>
        </div>

    </form>
    <div>
        Ecco la tua password: 
        <?php 
                   
            echo isset($psw) ? $psw : "_";  

        ?>
        
    </div>
</div>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js" integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN" crossorigin="anonymous"></script>
   
</body>
</html>