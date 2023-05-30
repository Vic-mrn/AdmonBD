<?php
session_start();

$conn = mysqli_connect(
  'mysql.serviciosintegralesonline.com',
  'practica6',
  'admon1234',
  'admonbd910'
) or die(mysqli_erro($mysqli));

?>


$conn = mysqli_connect(
  'localhost',
  'root',
  '',
  'formulario'
) or die(mysqli_erro($mysqli));