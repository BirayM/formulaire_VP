<?php 
require ('login.php')
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>connexionG</title>
</head>
<body>
     <h1 style="text-align: center;" > Connexion </h1>
        <div>
            <form action="accueil.php" method="POST" >
            <input type="text"name="Uname" placeholder="Nom d'utilisateur" >  <br> <br>
            <input type="password" name="confirm" placeholder="Mot de passe" >  <br> <br>
            <input type="submit" value="inscription" class="button" >
            </form>
        </div>

<?php 
$con_Uname=$_POST["Uname"];
?>


</body>
</html>