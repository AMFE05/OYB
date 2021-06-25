<?php include("BD.php"); ?>

<?php include('includes/header.php'); ?>

<main class="container p-4">
  <div class="row">
    <div class="col-md-4">
      <!-- MENSAJES -->
      
      <?php if (isset($_SESSION['message'])) { ?>
      <div class="alert alert-<?= $_SESSION['message_type']?> alert-dismissible fade show" role="alert">
        <?= $_SESSION['message']?>
        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <?php session_unset(); } ?>

    <div class="col">
      <table class="table table-bordered">
        <thead>
          <tr>
            <th>Nombre</th>
            <th>Correo Electrónico</th>
            <th>Teléfono</th>
            <th>Mensaje</th>
          </tr>
        </thead>
        <tbody>

          <?php
          $query = "SELECT * FROM mensajes";
          $result_tasks = mysqli_query($connect, $query);    

          while($row = mysqli_fetch_assoc($result_tasks)) { ?>
          <tr>
            <td><?php echo $row['Nombre']; ?></td>
            <td><?php echo $row['Correo']; ?></td>
            <td><?php echo $row['Tel']; ?></td>
            <td><?php echo $row['Mensaje']; ?></td>
            <td>
              <a href="Editar.php?ID=<?php echo $row['ID']?>" class="btn btn-secondary">
                <i class="fas fa-marker"></i>
              </a>
              <a href="Eliminar.php?ID=<?php echo $row['ID']?>" class="btn btn-danger">
                <i class="far fa-trash-alt"></i>
              </a>
            </td>
          </tr>
          <?php } ?>
        </tbody>
      </table>
    </div>
  </div>
</main>

<?php include('includes/footer.php'); ?>