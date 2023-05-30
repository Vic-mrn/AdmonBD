<?php
include("db.php");
$Nombre = '';
$Usuario= '';
$Contrasena= '';
$Email= '';

if  (isset($_GET['id'])) {
  $id = $_GET['id'];
  $query = "SELECT * FROM Usuarios WHERE ID_Usuario=$id";
  $result = mysqli_query($conn, $query);
  if (mysqli_num_rows($result) == 1) {
    $row = mysqli_fetch_array($result);
    $Nombre = $row['Nombre'];
    $Usuario = $row['Usuario'];
    $Contrasena = $row['Contrasena'];
    $Email = $row['Email'];
  }
}

if (isset($_POST['update'])) {
 
  $id = $_GET['id'];
  $Nombre= $_POST['Nombre'];
  $Usuario = $_POST['Usuario'];
  $Contrasena= $_POST['Contrasena'];
  $Email= $_POST['Email'];

  $query = "UPDATE Usuarios set Nombre = '$Nombre', Usuario = '$Usuario', Contrasena = '$Contrasena', Email = '$Email'  WHERE ID_Usuario=$id";
  mysqli_query($conn, $query);
  $_SESSION['message'] = 'Usuario actualizado exitosamente';
  $_SESSION['message_type'] = 'Advertencia';
  header('Location: index.php');
}

?>
<?php include('includes/header.php'); ?>
<div class="container p-4">
  <div class="row">
    <div class="col-md-4 mx-auto">
      <div class="card card-body">
      <form action="Update.php?id=<?php echo $_GET['id']; ?>" method="POST">
        <div class="form-group">
          <input name="Nombre" type="text" class="form-control" value="<?php echo $Nombre; ?>" placeholder="Actualizar nombre">
        </div>
        
        <div class="form-group">
          <input name="Usuario" type="text" class="form-control" value="<?php echo $Usuario; ?>" placeholder="Actualizar usuario">
        </div>

        <div class="form-group">
          <input name="Contrasena" type="text" class="form-control" value="<?php echo $Contrasena; ?>" placeholder="Actualizar contraseña">
        </div>

        <div class="form-group">
          <input name="Email" type="text" class="form-control" value="<?php echo $Email; ?>" placeholder="Actualizar Email">
        </div>

        <button class="btn-success" name="update">
          Actualizar
</button>
      </form>
      </div>
    </div>
  </div>
</div>
<?php include('includes/footer.php'); ?>
