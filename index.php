<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-gH2yIJqKdNHPEq0n4Mqa/HGKIhSkIHeL5AyhkYV8i59U5AR6csBvApHHNl/vI1Bx" crossorigin="anonymous">
    <link rel="stylesheet" href="index.css">
    <title>Funciones String y arrays en PHP</title>
</head>
<body>
<?php
include('header.php');
            if($_GET['page'] == 'ejercicio_1') {include('Ejercicios/Ejercicio_1.php');}
            elseif ($_GET['page'] == 'ejercicio_2') {include('Ejercicios/Ejercicio_2.php');}
            elseif ($_GET['page'] == 'ejercicio_3') {include('Ejercicios/Ejercicio_3.php');}
            elseif ($_GET['page'] == 'ejercicio_4') {include('Ejercicios/Ejercicio_4.php');}
            elseif ($_GET['page'] == 'ejercicio_5') {include('Ejercicios/Ejercicio_5.php');}
            elseif ($_GET['page'] == 'ejercicio_6') {include('Ejercicios/Ejercicio_6.php');}
            elseif ($_GET['page'] == 'ejercicio_7') {include('Ejercicios/Ejercicio_7.php');}
            elseif ($_GET['page'] == 'ejercicio_8') {include('Ejercicios/Ejercicio_8.php');}
            else {header("Location: index.php?page=ejercicio_1");}    
   ?>
   <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.5/dist/umd/popper.min.js" integrity="sha384-Xe+8cL9oJa6tN/veChSP7q+mnSPaj5Bcu9mPX5F5xIGE0DVittaqT5lorf0EI7Vk" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/js/bootstrap.min.js" integrity="sha384-ODmDIVzN+pFdexxHEHFBQH3/9/vQ9uori45z4JjnFsRydbmQbmL5t1tQ0culUzyK" crossorigin="anonymous"></script>
    </body>
    </html>