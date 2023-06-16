<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>Document</title>
</head>
<body>
<div 
   class="Z">
    <h1>S'inscrire admin</h1>
     <p> veuillez renseigner vos donnée</p>

     <form action="traitement_inscription.php" method="post"></form>
         <div class="A">
           <label>Nom </label class="A1">
             <input type="text" name="nom" required><br>
         </div>
        <div class="B">
           <label>Prénom(s) </label class="B1">
             <input type="text" name="prenom" required><br>
        </div>
        <div class="C">
            <label>Email </label class="C1">
              <input type="email" name="email" required><br>
        </div>
        <div class="D">
            <label>Mot de passe </label class="D1">
              <input type="password" name="motdepasse" required><br>
        </div>

        <button >créer votre compte</button>
    </form>
  </div>
</body>
</html>

<?php
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    
    $nom = $_POST['nom'];
    $prenom = $_POST['prenom'];
    $email = $_POST['email'];
    $motdepasse = $_POST['motdepasse'];

    header('Location: confirmation.php');
    exit;
}
?>
