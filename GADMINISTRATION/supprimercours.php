 <?php
 include_once "traitementindex.php";
 
 // Récupérer l'identifiant dans le lien
 $id = $_GET['id'];
 
 // Connexion à la base de données
 $con = mysqli_connect("localhost", "root", "", "examen_db");
 
 // Vérification de la connexion
 if (!$con) {
     die("Connexion échouée: " . mysqli_connect_error());
 }
 
 // Échapper les caractères spéciaux pour éviter les injections SQL
 $id = mysqli_real_escape_string($con, $id);
 
 // Requête de suppression
 $query = "DELETE FROM cours WHERE id = '$id'";
 $result = mysqli_query($con, $query);
 
 if ($result) {
     // Redirection après suppression
     header("Location: gestioncours.php");
     exit;
 } else {
     echo "Erreur lors de la suppression";
 }
 
 // Fermer la connexion
 mysqli_close($con);


?>

 