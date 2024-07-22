<!-- <!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>Modifier</title>
</head>
<body>
    <style>
.form{
font-family: Arial, sans-serif;
background-color: white;
padding: 15px;
box-shadow: 0 0 10px  rgba(0,0,0,0.2);
border-radius: 6px;
width: 25%;
margin:0px auto;
margin-top: 180px;

}
.form form{
    display: flex;
    width: 280px;
    flex-direction: column;

}
.retour{
    color: black;
    text-decoration: 0;
    display: flex;
    align-items: center;

    
}
.retour img{
    height: 16px;
    margin-right: 5px;
}
h2{
    margin: 10px 0;
    font-weight: 400;
    text-transform: uppercase;
    
}
.erreur_message{
    color: red;
    font-style: 12px;

}
label{
    margin-top: 5px;
    text-transform: uppercase;

}
input{
    padding: 5px;
    border: 1px solid gray;
    outline: 0;
    margin-top: 2px;
}
input:focus{
    border: 1px solid rgb(244, 244, 28);
}
.submit{
    margin-top: 25px;
    background-color: black;
    color: white;
    border: 1px solid black;
    cursor: pointer;
    text-transform: uppercase;

}
    </style>
      <div class="form">
        <a href="modifiecours.php" class="retour"><img src="image/retour-bouton.jpg">Retour</a>
        <h3>Modifier les informations du cours</h3>
        <p class="erreur_message">
           <h6 style="color:red"> Veuilez remplire tous les champs!</h6>

        </p>
        <form action="modifiecours.php" method="POST">
        <?php
    //     require_once "traitementindex.php";
    //     $id = $_GET['id'];
    //     // print_r($id);
    //     $sql = "SELECT * FROM professeurs WHERE id= $id";
    //     $result = $conn->query($sql);
    //     while($row=$result->fetch_assoc()){
    //         // print_r($row['pa$id 
    //     ?>
    //          <label type="hidden">Id</label> 
    //         <input type="hidden" value="<?php echo $id ?>" name="id">
    //         <label  >nom cours</label>
    //         <input type="text" value="<?php echo $row['nom_cours'];?>" name="username">
    //         <label  >jours</label>
    //         <input type="text" value="<?php echo $row['jours'];?>" name="email">
    //         <label  >heurs cours</label>
    //         <input type="text" value="<?php echo $row['heurs_cours'];?>" name="number">
    //         <label  >salle cours</label>
    //         <input type="text" value="<?php echo $row['salle_cours'];?>" name="matier">
    //         <label  >cours professeurs</label>
    //         <input type="text" value="<?php echo $row['cours_professeurs'];?>" name="adresse">
            
    //     <?php
    //                 print_r($row['username']);
    //     }
    //     ?>

    //         <input type="submit"  value="Ajouter" name="bouton" class="submit">
    //     </form>
    // </div>

</body>
</html>

<!DOCTYPE html>
<html>
<head>
  <title>Gestion Cours</title>
</head>
<body>
  <!-- <h1>Gestion Cours</h1>

  <form method="POST" action="traitementcours.php">
    <label for="nom_cours">Nom du Cours:</label>
    <input type="text" id="nom_cours" name="nom_cours" required><br><br>

    <label for="description">Description:</label>
    <textarea id="description" name="description" required></textarea><br><br>

    Ajouter d'autres champs si besoin (professeur, niveau, etc.)

    <input type="submit" value="Ajouter Cours">
  </form> -->
  <!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link rel="stylesheet" href="style.css">
    <title>information cours</title>
</head>

    <style>
.form{
background-color: white;
padding: 25px;
box-shadow: 0 0 10px  rgba(0,0,0,0.2);
border-radius: 6px;
width: 25%;
margin:0px auto;
margin-top: 80px;
background-image: url(image/jeune-homme-ecrivant.png) ;

}
.form form{
    display: flex;
    width: 280px;
    flex-direction: column;

}
.retour{
    color: black;
    text-decoration: 0;
    display: flex;
    align-items: center;

    
}
.retour img{
    height: 16px;
    margin-right: 5px;
}
h2{
    margin: 10px 0;
    font-weight: 400;
    text-transform: uppercase;
    
}
.erreur_message{
    color: red;
    font-style: 12px;

}
label{
    margin-top: 5px;
    text-transform: uppercase;

}
input{
    padding: 5px;
    border: 1px solid gray;
    outline: 0;
    margin-top: 2px;
}
input:focus{
    border: 1px solid rgb(244, 244, 28);
}
.btn_cours{
    margin-top: 25px;
    background-color: black;
    color: black;
    border: 1px solid black;
    cursor: pointer;
    text-transform: uppercase;

}
    </style>
    <div class="form">
        <a href="gestioncours.php" class="retour" style="color:green;"><img src="image/retour-bouton.jpg"  >Retour</a>
        <h3>Modifier un cours</h3>
        <p class="erreur_message">
           <h6> Veuilez remplire tous les champs!</h6>

        </p>
        <form action="modifiecours.php" method="POST">
        <?php
        require_once "traitementindex.php";
        $id = $_GET['id'];
        // print_r($id);
        $sql = "SELECT * FROM cours WHERE id= $id";
        $result = $conn->query($sql);
        while($row=$result->fetch_assoc()){
            // print_r($row['pa$id 
        ?>
            <input type="hidden" value="<?php echo $id ?>" name="id">
            <label  >Nom du cours</label>
            <input type="text"  value="<?php echo $row['nom_cours'];?>" name="nom cours">
            <label  >Jours</label>
            <input type="text" value="<?php echo $row['jours'];?>" name="jours">
            <label  >Heurs cours</label>
            <input type="text" value="<?php echo $row['heurs_cours'];?>" name="heurs cours">
            <label  >Salle de cours</label>
            <input type="text"  value="<?php echo $row['salle_cours'];?>" name="salle cours">
            <label  >Professeurs</label>
            <input type="text" value="<?php echo $row['cours_professeurs'];?>" name="cours professeurs"><br>
        <?php
                    //   print_r($row['username']);
        }
        ?>
            <input type="submit"  value="Ajouter cours" name="btn_cours" class="tbn_cours">
        </form>
    </div>

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <style>
        body {
            font-family: Arial, sans-serif;
            margin: 0;
            padding: 0;
            background-color: #f4f4f4;
        }
        .footer {
            background-color: #333;
            color: white;
            padding: 20px 0;
            text-align: center;
        }
        .footer a {
            color: white;
            margin: 0 10px;
            text-decoration: none;
        }
        .footer a:hover {
            text-decoration: underline;
        }
        .footer .social-icons {
            margin: 20px 0;
        }
        .footer .social-icons a {
            margin: 0 10px;
            font-size: 20px;
        }
        .footer .newsletter {
            margin: 20px 0;
        }
        .footer .newsletter input[type="email"] {
            padding: 10px;
            margin-right: 10px;
            border: none;
            border-radius: 5px;
        }
        .footer .newsletter button {
            padding: 10px 20px;
            border: none;
            border-radius: 5px;
            background-color: #555;
            color: white;
            cursor: pointer;
        }
        .footer .newsletter button:hover {
            background-color: #777;
        }
        .footer .contact-info {
            margin: 20px 0;
        }
    </style>
    <footer class="footer">
        <div class="social-icons">
            <a href="https://www.facebook.com" target="_blank" class="fa fa-facebook"></a>
            <a href="https://www.youtube.com" target="_blank" class="fa fa-youtube"></a>
            <a href="https://www.linkedin.com" target="_blank" class="fa fa-linkedin"></a>
            <!-- <a href="https://telegram.org" target="_blank" class="fa fa-telegram"></a> -->
            <a href="https://www.whatsapp.com" target="_blank" class="fa fa-whatsapp"></a>
        </div>
        <div class="newsletter">
            <form action="#" method="post">
                <input type="email" name="email" placeholder="Votre email">
                <button type="submit">S'inscrire</button>
            </form>
        </div>
        <div class="contact-info">
            <p>Contactez-nous : +221 78 113 07 03</p>
            <p>Email : greenschool@gmail.com</p>
        </div>
    </footer>
</body>
</html>