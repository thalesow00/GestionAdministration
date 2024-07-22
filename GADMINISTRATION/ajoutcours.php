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
<body>
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
        <h3>Ajouter un cours</h3>
        <p class="erreur_message">
           <h6> Veuilez remplire tous les champs!</h6>

        </p>
        <form action="traitementcours.php" method="POST">
            <label  >Nom du cours</label>
            <input type="text" name="nom_cours">
            <label  >Jours</label>
            <input type="text" name="jours">
            <label  >Heurs cours</label>
            <input type="text" name="heurs_cours">
            <label  >Salle de cours</label>
            <input type="text" name="salle_cours">
            <label  >Professeurs</label>
            <input type="text" name="cours_professeurs"><br>

            <input type="submit"  value="Ajouter cours" name="btn_cours" class="tbn_cours">
        </form>
    </div>

</body>
</html>
</body>
</html>