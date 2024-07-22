<?php

require_once "traitementindex.php";

  // Récupérer les données du formulaire
  $id = $_POST['id'];
  $nom_cours = $_POST['nom_cours'];
  $jours = $_POST['jours'];
  $heurs_cours = $_POST['heurs_cours'];
  $salle_cours = $_POST['salle_cours'];
  $cours_professeurs = $_POST['cours_professeurs'];
  
//   var_dump($id, $nom, $email, $number, $matier, $adresse, $password);

  // ... (Récupérer les autres champs)

  // Requête pour insérer le professeur dans la base de données
  $sql = "UPDATE cours SET nom_cours= '$nom_cours', jours = '$jours', heurs_cours = '$heurs_cours', salle_cours = '$salle_cours', cours_professeurs = '$cours_professeurs'  WHERE id = $id";

  
  if ($conn->query($sql) === TRUE) {
    // Redirection vers la page de gestion des professeurs (ou un message de confirmation)
    header("Location: gestioncours.php"); // ou afficher un message de succès
  } else {
    // Gestion de l'erreur
    echo "Error: " . $sql . "<br>" . $conn->error;
  }

  $conn->close();

  ?>