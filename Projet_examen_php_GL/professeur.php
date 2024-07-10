<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <!-- <link rel="stylesheet" href="style.css"> -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js">
</head>
<body>
    
<div class="form-container">
    <style>
        form {
    max-width: 400px;
    margin: 0 auto;
    padding: 20px;
    background-color: #fff;
    border-radius: 5px;
    box-shadow: 0 2px 4px rgba(0, 0, 0, 0.1); 
} */

label {
    display: block;
    margin-bottom: 10px;
}

input[type="text"] {
    width: 100%;
    padding: 10px;
    margin-bottom: 15px;
    border: 1px solid #ccc;
    border-radius: 3px;
}

button {
    background-color: #007bff;
    color: #fff;
    border: none;
    padding: 10px 20px;
    border-radius: 3px;
    cursor: pointer;
}
    </style>
        <form id="signup-form">
            <h2>Information Professeurs</h2>
            <input type="text" id="username" name="username" placeholder="Nom d'utilisateur"> 
            <input type="number"  name="numero" placeholder=" Numero telephone"><br> <br>
            <input type="email" id="email" name="email" placeholder="Adresse e-mail">
            <input type="password" id="password" name="password" placeholder="Mot de passe"><br><br>
            <input type="text"   name=" Adresse" placeholder="Adresse"> 

            <input type="text"  name="matiere" placeholder=" Matiere"> <br><br>
            <br>
            <input type=" text"  name="civilite" placeholder=" Civiliter"> 
            
            <!-- <input type="textarea"   name="message" placeholder="Veuilez nous laissez un message pour mieu nous ameriolé."> 
             -->
            <textarea name="message" class="coment" placeholder="Veuilez nous laissez un message pour mieu nous ameriolé."></textarea> <br> <br>
            <br>  <br>
            Homme
            <input type="radio" name="homme" > 
    
  
            Femme    
            <input type="radio" name="femme" > </label><br><br>
            
            <!-- <input type="password" id="password" name="password" placeholder="Mot de passe"> -->
            <div class="checkbox-container">
                <input type="checkbox" id="terms" name="terms">
                <label for="terms">J'accepte les Conditions d'utilisation et la Politique de confidentialité.</label>
            </div>
            <button type="submit"> Envoyer</button>
        </form>
    </div>
    
</body>
</html>