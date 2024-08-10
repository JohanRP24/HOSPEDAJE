<?php
session_start();
include("connect.php");

?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" type="text/css" href="./css/stylehome.css">
    <title>Homepage</title>
</head>
<body>
<header>
        <nav>
        <h1>HOTEL ESTRELLA DE MAR</h1>
        <a href="logout.php">SALIR</a>
    </nav>
    </header>

    <div>
        <!--Boton de clientes-->
        <button class="custom-button"> <a href="clientes.html">
            <img src="./img/clientes.png" alt="Clic para ver clientes">
        </button> </a>
    </div>
     <!--Boton de habitaciones-->
     <div>
     <button class="custom-button"> <a href="habitacion.html">
            <img src="./img/habitacion.png" alt="Clic para ver habitaciones"></button>
            </a>
            </div>
    <div>
        <button class="custom-button"> <a href="reservas.html">
            <img src="./img/reservas.png" alt="Clic para ver reservas"> 
        </button> </a>
        </div>           
    <div>
        <button class="custom-button"><a href="facturas.html">
            <img src="./img/factura.png" alt="Clic para ver factura">
        </button> </a>
    </div>

    <div
       if(isset($_SESSION['email'])){
        $email=$_SESSION['email'];
        $query=mysqli_query($conn, "SELECT users.* FROM `users` WHERE users.email='$email'");
        while($row=mysqli_fetch_array($query)){
            echo $row['firstName'].' '.$row['lastName'];
        }
       }
       ?>
     
      
    </div>
</body>
</html>