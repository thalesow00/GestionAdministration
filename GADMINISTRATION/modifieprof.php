<?php
//   // Connexion à la base de données
//   $conn = new mysqli($servername, $username, $password, $dbname);

//   // Vérifier la connexion
//   if ($conn->connect_error) {
//     die("Connection failed: " . $conn->connect_error);
//   }
require_once "traitementindex.php";

  // Récupérer les données du formulaire
  $id = $_POST['id'];
  $nom = $_POST['username'];
  $email = $_POST['email'];  
  $number = $_POST['number'];
  $matier = $_POST['matier'];
  $adresse = $_POST['adresse'];
  $password = $_POST['passwords'];
  // var_dump($id, $nom, $email, $number, $matier, $adresse, $password);

  // ... (Récupérer les autres champs)

  // Requête pour insérer le professeur dans la base de données
  $sql = "UPDATE professeurs SET username = '$nom', number = '$number', email = '$email', passwords = '$password', adresse = '$adresse', matiere = '$matier'   WHERE id = $id";

  if ($conn->query($sql) === TRUE) {
    // Redirection vers la page de gestion des professeurs (ou un message de confirmation)
    header("Location: gestionprofesseurs.php"); // ou afficher un message de succès
  } else {
    // Gestion de l'erreur
    echo "Error: " . $sql . "<br>" . $conn->error;
  }

  $conn->close();
?>