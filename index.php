<?php

$lunghezza = "";


$special = "^+*/()!$?%";




if (isset($lunghezza)){
   
    $lunghezza = $_GET["lunghezza"];



    };  


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
    <?php var_dump($lunghezza); ?>
    <label for="lunghezza" class="form-label">Generatore di password quasi sicure</label>
    <form action="" method="GET">
        <div class="container">

            <div class="col-12 row justify-content-between align-middle py-2">
                <p class="col-4 my-auto">   
                    Lunghezza password: 
                </p>
                <input type="text" name="lunghezza" id="lunghezza" class="col-4 ">
            </div>
                
            <button class="col-auto  ms-2" type="submit">Genera</button>
        </div>

    </form>
    <div>
        Ecco la tua password: 
        <?php 
        
        if (isset($lunghezza)){
            $lunghezza_stringa = lenstr($special);
            for ($i = 0 ; $i <= $lunghezza_stringa; $i++){
                $psw_generated += $special[random_int(0,10)];
            };
            
            echo $psw_generated;};  
            var_dump($psw_generated);
        ?>
        
    </div>
</div>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js" integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN" crossorigin="anonymous"></script>
   
</body>
</html>