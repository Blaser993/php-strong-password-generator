<?php

$lunghezza = $_GET["lunghezza"]


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

    <label for="password" class="form-label">Generatore di password quasi sicure</label>
    <form action="" method="GET">
        <div class="container row">
            <input type="text" name="lunghezza" id="password" class="col-10 flex-grow-1" placeholder="Inserisci la lunghezza in numeri della password richiesta">
            <button class="col-auto  ms-2" type="submit">Genera</button>
        </div>
        <div>
            Ecco la tua password: 
            <?php
            echo $lunghezza
            ?>
        </div>
    </form>
</div>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js" integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN" crossorigin="anonymous"></script>
   
</body>
</html>