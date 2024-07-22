<?php
  // Connexion à la base de données (remplacer les valeurs par les vôtres)
  $servername = "localhost";
  $username = "root";
  $password = "";
  $dbname = "examen_db";

  $conn = new mysqli($servername, $username, $password, $dbname);

  // Vérifier la connexion
  if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
  }
 
//   $conn->close();
?>