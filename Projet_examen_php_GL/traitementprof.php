<?php
if(isset($_POST['validert'])){

if (!empty($_POST['username']) &&!empty($_POST['Prenom']) && !empty($_POST['email']) && !empty($_POST['password'])) {
    $nom = htmlspecialechar($_POST['Nom']);
    $Prenom = htmlspecialechar($_POST['Prenom']);
    $email = htmlspecialechar($_POST['email']);
    $password = sha1($_POST['password']);

    if(strlen($_POST['password'])<8){
        $message = "Le mot de passe saisie est trop court.";

    }
}
}


if (isset($messasge)){
echo $message; 
}
function addUsers($Nom,$Prenom,$email,$passwords, $co){
    $sql = "INSERT INTO users(
        Nom,
        Prenom, 
        email, 
        passwords
) 
    VALUES( 
      '$Nom',
      '$Prenom',
      '$email', 
      '$passwords'
)";
    if (mysqli_query($co, $sql)){
    echo " Ajout reussie avec success";
    } else {
 echo "Erreur: " . $sql . "<br>" . mysqli_error($co);
}

}

$con = openconnexion();
// Check connection
if (!$con) {
die("Erreur de connexion" . mysqli_connect_error());

}

mysqli_close($con);

//&&!empty($_POST['Nom'])&&!empty($_POST['prenom'])&&!empty($_POST['email'])&&!empty($_POST['password']))

if(isset($_POST['Nom'])&&isset($_POST['Prenom'])&&isset($_POST['email'])&&isset($_POST['passwords'])&&
!empty($_POST['Nom'])&&!empty($_POST['prenom'])&&!empty($_POST['email'])&&!empty($_POST['passwords'])){

  
//   $id = $_POST['id'];
  $Nom = $_POST['Nom'];
  $Prenom = $_POST['Prenom'];
  $email = $_POST[ 'email'];
  $passwords = $_POST['passwords'];

  addUsers($Nom,$Prenom,$email,$passwords,$con);

  if(strlen($_POST['passwords'])<8){
    $message = "Le mot de passe saisie est trop court.";
    }
}
