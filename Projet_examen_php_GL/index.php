<?php
 

?>
<!DOCTYPE html>
 <html lang="en">
 <head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>EXAMEN</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js">
    <link rel="stylesheet" href="style.css">
 </head>
 <body>

 <form class="parent" action="traitementindex.php " method="post" style="border-radius: 50px;">
        <div class="monimg">

           <!-- <img src="images/signin.jpg" alt="" style="width: 45%; height: 185%; margin-right:295px" > -->
            
        </div>
      <div class="flex" style="margin-top: -10px;">
        <div class="log">
            <h2 style="color:white;">Sign in</h2>
        </div>
        <div class="info">
            <div class="input1">
                <input type="text"  name="Nom" placeholder="Usename" required  > <img src="images/user.png " alt="" id="icone1">
            </div>
            <div class="input1">
                <input type="password" name="password" placeholder="Password" required ><img src="images/reset-password.png" alt="" >
            </div>      
                  
        </div>
        <div class="forget">
                 <h6><a href="">forget password?</a></h6>
        </div>
        
             <button class="phrase" type="submit" name="valider" style="color:white; margin-right: 60px;"><a href=" accueil.php"></a>Sign in </button> 
 
        <div class="creercompt"> 
            <h6>Don't have an account? 
 
                <a href="inscription.php">Sign Up</a></h6>
        </div>
        </div>  
        <!-- <div class="tiret"> -->

 
 </body>
 </html>       