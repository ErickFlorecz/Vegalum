<?php
include('../db.php');
print('Funciono');
/*

if (isset($_POST['e_correo'])) {

      $nombre = $_POST['nombre'];
      $nombre = strtoupper($nombre);

      $correo = $_POST['correo'];

      $asunto = $_POST['asunto'];

      $mensaje = $_POST['mensaje'];

  
      $sql = "INSERT INTO `correos`(`nombre`, `correo`, `asunto`, `mensaje`) VALUES ('$nombre','$correo','$asunto','$mensaje')";

      if (mysqli_query($conn, $sql)) {
            $_SESSION['msgMail'] = 'Enviado Satisfactoriamente';
            $_SESSION['msgMail_color'] = 'success';

            //header("Location: ");
      } else {
            echo "Error: " . $sql . "<br>" . mysqli_error($conn);
            $_SESSION['msgMail'] = 'Enviado no';
            $_SESSION['msgMail_color'] = 'danger';
      }
      mysqli_close($conn);
} */
?>