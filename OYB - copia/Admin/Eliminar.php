<?php

include("BD.php");

if(isset($_GET['ID'])) {
  $ID = $_GET['ID'];
  $query = "DELETE FROM mensajes WHERE ID = $ID";
  $result = mysqli_query($connect, $query);
  if(!$result) {
    die("Query Failed.");
  }

  $_SESSION['message'] = 'Datos removidos satisfactoriamente';
  $_SESSION['message_type'] = 'danger';
  header('Location: index.php');
}

?>