<?php
 session_start();

include "config/commandes.php";

 if(isset($_SESSION['userxXJppk45hPGu']))
 {
     if(!empty($_SESSION['userxXJppk45hPGu']))
     {
         header("Location: client/");
     }
 }

// pour verifier les caractere spaciaux


if(isset($_POST['envoyer']))
{
    if(!empty($_POST['email']) AND !empty($_POST['motdepasse']) AND !empty($_POST['nom']) AND !empty($_POST['prenom']))
    {
        $email = htmlspecialchars(strip_tags($_POST['email'])) ;
        $motdepasse = htmlspecialchars(strip_tags($_POST['password']));
        $nom = htmlspecialchars(strip_tags($_POST['nom']));
        $prenom = htmlspecialchars(strip_tags($_POST['prenom']));

        $user = ajouterUser($nom, $prenom, $email, $password);

        if($user){
            $_SESSION['userxXJppk45hPGu'] = $user;
            header('Location: index.php');
        }else{
            echo "Compte non créer !";
        }
    }

}


?>
 
 <!DOCTYPE html>
 <html lang="en">
 <head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Chats</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js">
    <link rel="stylesheet" href="style.css">
 </head>
 <body>
 

    <form class="parent" action="accueil.php" method="POST" style="border-radius: 50px;">
        <div class="monimg">

           <!-- <img src="images/signin.jpg" alt="" style="width: 45%; height: 185%; margin-right:295px" > -->
            
        </div>
      <div class="flex" style="margin-top: -20px;">
        <div class="log">
            <h2 style="color:white; margin-top:-10px;">Sign UP</h2>
        </div>
        <div class="info" style="margin-top: 1.9rem;">
            <div class="input1">
                <input type="text"  placeholder="Nom" required  > <img src="images/user.png " alt="" id="icone1">
            </div>
            <div class="input1">
                <input type="text"  placeholder="Prenom" required  > <img src="images/user.png " alt="" id="icone1">
            </div>
            <div class="input1">
                <input type="mail"  placeholder="e-mail" required > <img src="images/email (1).png" alt="" id="icone1">
            </div>
            <div class="input1">
                <input type="password" placeholder="Password" required ><img src="images/reset-password.png" alt="" id="icone1" >
            </div>      
                  
        </div>
        <div class="forget" style=" padding-bottom:0.1rem; ">
                 <h6 ><a href="">forget password?</a></h6>
        </div>
        <button class="phrase" type="buton" name="valider" style="color:white; margin-top:115px; margin-right: 70px">Sign Up </button> 
        <div class="creercompt"> 
            <h6>Vous avez dejas un compte? <a href="inscription.php">Sign In</a></h6>
        </div>
        </div>  
        <!-- <div class="tiret"> -->

        </form>
</form>
 </body>
 </html>