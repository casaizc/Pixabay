<?php 

$conn = new mysqli("127.0.0.1", "root", "carlossaiz123", "pixabay");

if($conn->connect_error){

die("Error de conexion . $conn->connect_error");

}