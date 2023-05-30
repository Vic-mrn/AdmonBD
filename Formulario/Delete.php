<?php

include("db.php");

if(isset($_GET['id'])) {
  $id = $_GET['id'];
  $query = "DELETE FROM Usuarios WHERE ID_Usuario = $id";
  $result = mysqli_query($conn, $query);
  if(!$result) {
    die("Fallo al eliminar");
  }

  $_SESSION['message'] = 'Usuario eliminado con exito';
  $_SESSION['message_type'] = 'Atencion';
  header('Location: index.php');
}

?>
