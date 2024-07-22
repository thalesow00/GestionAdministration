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
$query = "DELETE FROM professeurs WHERE id = '$id'";
$result = mysqli_query($con, $query);

if ($result) {
    // Redirection après suppression
    header("Location: gestionprofesseurs.php");
    exit;
} else {
    echo "Erreur lors de la suppression";
}

// Fermer la connexion
mysqli_close($con);
?>



















// // connexion a la base de donné
// include_once "traitementindex.php"
// // recup id dans le lien
// $id = $_GET['id'];
// // req de suppression
// $req = mysqli_real_escape_string_($con , $id);
// $query = "DELETE FROM professeurs WHERE id = '$id'";
// $result = mysqli_query($conn, $query);

// if ($result)

//     header("Location: gestionprofesseurs.php")
// // redirection
// header("Location: gestionprofeseurs.php");



// // Connexion à la base de données
// include_once "traitementindex.php";

// // Récupération de l'id dans le lien
// $id = $_GET['id'];

// // Requête de suppression
// $req = mysqli_real_escape_string($con, $id);
// $query = "DELETE FROM professeurs WHERE id = '$req'";
// $result = mysqli_query($con, $query);

// if ($result) {
//     // Redirection
//     header("Location: gestionprofeseurs.php");
//     exit;
// }

 
// // Connexion à la base de données
// include_once "traitementindex.php";

// // Vérification si l'id est présent dans l'URL
// if (isset($_GET['id']) && !empty($_GET['id'])) {
//     $id = (int) $_GET['id']; // Conversion de l'id en entier pour éviter les injections SQL

//     // Requête de suppression
//     $query = "DELETE FROM professeurs WHERE id =?";
//     $stmt = mysqli_prepare($con, $query);
//     mysqli_stmt_bind_param($stmt, 'i', $id);
//     mysqli_stmt_execute($stmt);
//     $result = mysqli_stmt_affected_rows($stmt);

//     if ($result > 0) {
//         // Redirection
//         header("Location: gestionprofeseurs.php");
//         exit;
//     } else {
//         echo "Erreur lors de la suppression";
//     }
// } else {
//     echo "Aucun id trouvé";
// }
?>

 