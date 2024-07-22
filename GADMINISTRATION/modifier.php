<!DOCTYPE html>
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
.retour:hover{
    color:green;
}
img:hover{
    color:green;
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
.submit:hover{
    background-color:green;
}

    </style>
      <div class="form">
        <a href="gestionprofesseurs.php" class="retour"><img src="image/retour-bouton.jpg">Retour</a>
        <h3>Modifier les information du Professeur</h3>
        <p class="erreur_message">
           <h6 style="color:red"> Veuilez remplire tous les champs!</h6>

        </p>
        <form action="modifieprof.php" method="POST">
        <?php
        require_once "traitementindex.php";
        $id = $_GET['id'];
        // print_r($id);
        $sql = "SELECT * FROM professeurs WHERE id= $id";
        $result = $conn->query($sql);
        while($row=$result->fetch_assoc()){
            // print_r($row['pa$id 
        ?>
             <!-- <label type="hidden">Id</label> -->
            <input type="hidden" value="<?php echo $id ?>" name="id">
            <label  >Username</label>
            <input type="text" value="<?php echo $row['username'];?>" name="username">
            <label  >Email</label>
            <input type="text" value="<?php echo $row['email'];?>" name="email">
            <label  >Number</label>
            <input type="text" value="<?php echo $row['number'];?>" name="number">
            <label  >Matiere</label>
            <input type="text" value="<?php echo $row['matiere'];?>" name="matier">
            <label  >Adresse</label>
            <input type="text" value="<?php echo $row['adresse'];?>" name="adresse">
            <label  > Password</label>
            <input type="password" value="<?php echo $row['passwords'];?>"  name="passwords">
        <?php
                    print_r($row['username']);
        }
        ?>

            <input type="submit"  value="Ajouter" name="bouton" class="submit">
        </form>
    </div>

</body>
</html>



 