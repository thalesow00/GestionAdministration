<?php
$Nom =$_POST['Nom'];
$passwords =$_POST['password'];
 
function openconnexion(){
    $servername = "localhost"; 
    $username = "root";
    $password = "";
    $db = "examen_db";
    // Create connection
    $conn = mysqli_connect($servername,$username,$password,$db);
// Check connection
if (!$conn) {
die("Erreur de connexion" . mysqli_connect_error());
}
    return $conn;
}
$conn = openconnexion();
// $db 
$query = "SELECT * FROM professeurs WHERE  username='$Nom' AND passwords='$passwords'";
 $result = $conn->query($query);
// pour rediriger vers accueil
if ($result->num_rows == 1){
  //connection reuissie avec succe
  header("Location: accueil.php");
  exit();
} else {
  //return page index
 echo("ereur de conexion"),$Nom,$passwords;
  exit();
}
 $conn->close();
  
?>