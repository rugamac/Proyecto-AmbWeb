<?php 
$id=$_GET["id"];
include "DAL/conexion.php";
$sql=conecta()->query("select * from detalles_usuario where id_detalle=$id");
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link
        href="https://fonts.googleapis.com/css2?family=Krub:ital,wght@0,200;0,300;0,400;0,500;0,600;0,700;1,200;1,300;1,400;1,500;1,600;1,700&display=swap"
        rel="stylesheet">

    <style>
    h1 {
        color: rgb(75, 75, 75);
    }
    </style>

    <link rel="stylesheet" href="css/style.css">
    <title>Index</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css"
        integrity="sha512-DTOQO9RWCH3ppGqcWaEA1BIZOC6xxalwEsw9c2QQeAIftl+Vegovlnee1c9QX4TctnWMn13TZye+giMm8e2LwA=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />

</head>

<body>
    <!--  -->

    <div class="container mt-3">
        <div class="mt-4 p-5 bg-dark text-white">
            <h1 class="text-center text-success">Nombre Persona</h1><br>
            <p class="text-center">Objetivos</p>
        </div>
    </div>
    <div class="container mt-3 container-fluid">
        <div class="mt-4 p-5 bg-dark">

        <div class="row justify-content-center"> <!-- columna -->

<div class="col-sm-5 mb-5">
    <h2 class="display-6 text-success">Edad: </h2>
    <input type="text" class="form-control" id="input1">
</div>

<div class="col-sm-5 mb-5">
<h2 class="display-6 text-success">Edad: </h2>
    <input type="text" class="form-control" id="input1">
</div>

<div class="col-sm-5 mb-5">
<h2 class="display-6 text-success">Edad: </h2>
    <input type="text" class="form-control" id="input1">
</div>

<div class="col-sm-5 mb-5">
<h2 class="display-6 text-success">Edad: </h2>
    <input type="text" class="form-control" id="input1">
</div>
</div>

<div class="row justify-content-center"> <!-- columna  -->

<div class="col-sm-5 mb-5">
    <h2 class="display-6 text-success">Edad: </h2>
    <input type="text" class="form-control" id="input1">
</div>

<div class="col-sm-5 mb-5">
<h2 class="display-6 text-success">Edad: </h2>
    <input type="text" class="form-control" id="input1">
</div>

<div class="col-sm-5 mb-5">
<h2 class="display-6 text-success">Edad: </h2>
    <input type="text" class="form-control" id="input1">
</div>

<div class="col-sm-5 mb-5">
<h2 class="display-6 text-success">Edad: </h2>
    <input type="text" class="form-control" id="input1">
</div>

            </div>
        </div>
    </div>






    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous">
    </script>
</body>

</html>