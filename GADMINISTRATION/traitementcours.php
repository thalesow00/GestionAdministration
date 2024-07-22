<?php
//   // Connexion à la base de données
//   $conn = new mysqli($servername, $username, $password, $dbname);

//   // Vérifier la connexion
//   if ($conn->connect_error) {
//     die("Connection failed: " . $conn->connect_error);
//   }
require_once "traitementindex.php";

  // Récupérer les données du formulaire

  $nom_cours= $_POST['nom_cours'];
  $jours = $_POST['jours'];
  $heurs_cours = $_POST['heurs_cours'];
  $salle_cours = $_POST['salle_cours'];
  $cours_professeurs = $_POST['cours_professeurs'];
  // var_dump($id, $Nom_du_cours, $Jours, $Heurs_cours, $Salle_cours, $professeurs);

  // ... (Récupérer les autres champs)

  // Requête pour insérer le cours dans la base de données
  $sql = "INSERT INTO cours (
                   nom_cours, 
                   jours, 
                   heurs_cours,
                   salle_cours,
                   cours_professeurs
                   )
                   VALUES (
                   '$nom_cours',
                   '$jours',  
                   '$heurs_cours', 
                   '$salle_cours',
                   '$cours_professeurs'
                   )";

  if ($conn->query($sql) === TRUE) {
    // Redirection vers la page de gestion des professeurs (ou un message de confirmation)
    header("Location: gestioncours.php"); // ou afficher un message de succès
  } else {
    // Gestion de l'erreur
    echo "Error: " . $sql . "<br>" . $conn->error;
  }

  $conn->close();
?>