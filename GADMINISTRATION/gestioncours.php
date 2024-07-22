<!DOCTYPE html>
<html>
<head>
  
  <link rel="stylesheet" type="text/css" href="style_gestionprofesseurs.css">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
</head>
<body>
  
  <style>
    *{
    margin: 0;
    padding: 0;
    box-sizing: border-box;
}
body{
    display: flex;
    align-items: center;
    justify-content: center;
    min-height: 100vh;
    position: relative;

}
.btn_aj{
    width: fit-content;
    margin-bottom: 20px;
    background-color:rgb(14, 203, 203) ;
    padding: 5px 20px;
    color: white;
    display: flex;
    align-items: center;
    text-align: 0;
    border-radius: 6px;
    text-decoration: 0;
}
.btn_aj, img{
    margin-right: 5px;
    height: 20px;
}
/* le tableau */
table{
    border-collapse: collapse;
    color: blue;
}
th{
    font-size: 16px;
    border-bottom: 3px slod rgb(241, 107, 4);
    padding: 5px 20px;

}
td{
    font-weight: 400;
    padding: 5px 30px;
    font-style: 14px;

}
img{
    height: 25px;

}
tr:nth-child(2n){
    background-color: rgb(19, 231, 234);

}
tr:nth-child(2n) td {
    border-bottom: 1px solid rgb(20, 230, 245);
    border-top: 1px solid #09e2ff;

}
/* ajouter  */
.form{
    background-color: white;
    padding: 25px;
    box-shadow: 0 0 10px  rgba(0,0,0,0.2);
    border-radius: 6px;

}
.form form{
    display: flex;
    width: 210px;
    flex-direction: column;

}
.retour{
    color: green;
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
   
  <div class="container">
        <a href="ajoutcours.php" classe="btn_aj"  style="color:green;"><img src="image/ajouter.png" alt="">Ajouter</a>
     
        <table>
            <tr id="items">
                <th>Nom cours</th>
                <th>Jours</th>
                <th>Heurs de cours</th>
                <th>Salle de Cours</th>
                 <th>Professeurs</th>
                <th>modifier le cours</th>
                <th>Supprimer</th>
            </tr>
            
           
            <?php
              // inclure la page de connexion 
               include_once "traitementindex.php";
               //requete pour afficher la liste des employés 
                     $req = mysqli_query($conn , "SELECT * FROM cours");
                     if(mysqli_num_rows($req) == 0){
                    //s'il  n'existe pas de prof dans db , alors affiche :
                      echo "Il n'y a pas encore de professeurs a ajouter !";
               }else{
                //si non , affiche la liste de tous les professeurs
                while($row=mysqli_fetch_assoc($req)){
                       ?>
                      <tr>
                           <td><?=$row['nom_cours']?></td>
                           <td><?=$row['jours']?></td>
                           <td><?=$row['heurs_cours']?></td>
                           <td><?=$row['salle_cours']?></td>
                           <td><?=$row['cours_professeurs']?></td>
                     <!-- id de chaque prof dans se lien  --> 
                   <td><a href="formcours.php?id=<?=$row['id']?>"><img src="image/crayon.png"></a></td>
                        <td><a href="supprimercours.php?id=<?=$row['id']?>"><img src="image/effacer.png"></a></td>
                      </tr>


                        <?php  

               }
             }
            

        ?> 
        </table>
    </div>
</body>
</html>