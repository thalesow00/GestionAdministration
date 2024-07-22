<?php
  require_once "traitementindex.php";
  // Récupérer les données du formulaire
  $username = $_POST['username'];
  $passwords = $_POST['passwords'];

  // Requête pour vérifier l'existence de l'utilisateur
  $sql = "SELECT * FROM professeurs WHERE username='$username' AND passwords='$passwords'";
  $result = $conn->query($sql);

  // Si l'utilisateur existe, redirection vers accueil.php
  if ($result->num_rows > 0) {
    header("Location: accueil.php");
  } else {
    // Si l'utilisateur n'existe pas, redirection vers index.php (ou un message d'erreur)
    header("Location: index.php"); // ou afficher un message d'erreur
  }
  ?>