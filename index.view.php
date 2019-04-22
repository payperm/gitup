<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Formulario contacto</title>
    <link href="https://fonts.googleapis.com/css?family=Open+Sans+Condensed:300" rel="stylesheet">
    <link rel="stylesheet" href="estilos.css">
</head>
<body>
    

<div class="wrap">

<form acction ="<?php  echo htmlspecialchars($_SERVER['PHP_SELF']); ?>" method ="post" >
<input type =text class="form-control" name="nombre" placeholder ="Nombre:" value = "">

<input type =text class="form-control" name="Correo" placeholder ="Correo:" value = "">

<textarea name="mensaje" class ="form-control" id="mensaje" placeholder ="Mensaje"></textarea>

<input type ="submit" name ="submit" value="enviar correo" class ="btn btnprimary">

</div>


</body>
</html>