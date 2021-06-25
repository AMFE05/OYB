
<?php
include("BD.php");
$Nombre = '';
$Correo = '';
$Tel = '';
$Mensaje = '';

if  (isset($_GET['ID'])) {
  $ID = $_GET['ID'];
  $query = "SELECT * FROM Mensajes WHERE ID= $ID";
  $result = mysqli_query($connect, $query);
  if (mysqli_num_rows($result) == 1) {
    $row = mysqli_fetch_array($result);
    $Nombre = $row['Nombre'];
    $Correo = $row['Correo'];
    $Tel = $row['Tel'];
    $Mensaje = $row['Mensaje'];
  }
}

if (isset($_POST['Editar'])) {
  $ID = $_GET['ID'];
  $Nombre = $_POST['Nombre'];
  $Correo = $_POST['Correo'];
  $Tel = $_POST['Tel'];
  $Mensaje = $_POST['Mensaje'];

  $query = "UPDATE Mensajes SET Nombre='$Nombre', Correo='$Correo', Tel='$Tel', Mensaje='$Mensaje' WHERE ID=$ID";
  mysqli_query($connect, $query);
  $_SESSION['message'] = 'Datos corregidos satisfactoriamente';
  $_SESSION['message_type'] = 'warning';
  header('Location: index.php');
}

?>
<?php include('includes/header.php'); ?>

<div class="container p-4">
  <div class="row">
    <div class="col-md-4 mx-auto">
      <div class="card card-body">
      <form action="Editar.php?ID=<?php echo $_GET['ID']; ?>" method="POST">
        <div class="form-group">
          <input name="Nombre" type="text" class="form-control" value="<?php echo $Nombre; ?>" placeholder="Nombre">
        </div>
        <input name="Correo" type="text" class="form-control" value="<?php echo $Correo; ?>" placeholder="Correo">
        </div>
        <input name="Tel" type="text" class="form-control" value="<?php echo $Tel; ?>" placeholder="Teléfono">
        </div>
        <div class="form-group">
        <textarea name="Mensaje" class="form-control" rows="5"><?php echo $Mensaje;?></textarea>
        </div>
        <button class="btn-success" name="Editar">
          ACTUALIZAR
</button>
      </form>
      </div>
    </div>
  </div>
</div>

<?php include('includes/footer.php'); ?>