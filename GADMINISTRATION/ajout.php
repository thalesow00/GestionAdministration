<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link rel="stylesheet" href="style.css">
    <title>Ajouter</title>
</head>
<body>
    <style>
.form{
background-color: white;
padding: 25px;
box-shadow: 0 0 10px  rgba(0,0,0,0.2);
border-radius: 6px;
width: 25%;
height: 18%;
margin:0px auto;
 

}
.form form{
    display: flex;
    width: 280px;
    flex-direction: column;
    height: 365px;

}
.retour{
    color: green;
    text-decoration: 0;
    display: flex;
    align-items: center;

    
}
.retour img{
    height: 26px;
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
    height: 20px;

}
input{
    padding: 5px;
    border: 1px solid gray;
    outline: 0;
    margin-top: 2px;
    width: 85%;
    height: 27px;
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
  
.submit:hover{
    background-color:green;
}

</style>
    <div class="form">
        <a href="gestionprofesseurs.php" class="retour"><img src="image/retour-bouton.jpg">Retour</a>
        <h3>Ajouter un Professeur</h3>
        <p class="erreur_message">
           <h6 style="color:red"> Veuilez remplire tous les champs!</h6>

        </p>
        <form action="traitementprof.php" method="POST">
            <label  >Username</label>
            <input type="text" name="username">
            <label  >Email</label>
            <input type="text" name="email">
            <label  >Number</label>
            <input type="text" name="number">
            <label  >Matiere</label>
            <input type="text" name="matier">
            <label  >Adresse</label>
            <input type="text" name="adresse">
            <label  > Password</label>
            <input type="password" name="passwords">

            <input type="submit"  value="Ajouter" name="bouton" class="submit">
        </form>
    </div>

</body>
</html>