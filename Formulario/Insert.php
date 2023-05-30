<?php

include('db.php');

if (isset($_POST['Insert'])) {
  $Nombre = $_POST['Nombre'];
  $Usuario = $_POST['Usuario'];
  $Contrasena = $_POST['Contrasena'];
  $Email = $_POST['Email'];
  
  $query = "INSERT INTO Usuarios(Nombre, Usuario, Contrasena, Email) VALUES ('$Nombre', '$Usuario', '$Contrasena', '$Email')";
  $result = mysqli_query($conn, $query);
  if(!$result) {
    die(mysql_error($result));
  }

  $_SESSION['message'] = 'Usuario registrado correctamente';
  $_SESSION['message_type'] = 'Resultado exitoso';
  header('Location: index.php');

}

?>
