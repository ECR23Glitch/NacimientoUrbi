<?php
  include_once('conexion.php');
  $nom = $_POST['name'];
  $ap = $_POST['lastname'];
  $mail = $_POST['email'];
  $comentario = $_POST['message'];

  $sql = "INSERT INTO comentarios (nombre, apellidos, correo, comentario) VALUES ('$nom', '$ap','$mail', '$comentario')";
  $stmt = $conn->prepare($sql);

  $stmt->execute();

  $comment_id = $stmt->insert_id;
 ?>
