

<?php 
 require('log.php');
 require('logbd.php');
 $erreur="";

if ($_SERVER["REQUEST_METHOD"] == "POST")
        {
        if ($_POST["code"]=$_POST["confirm"] )
        {
            $erreur="vous devez saisir le même mot de passe";
        }
         }
                 ?>



<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>InscriptionG</title>
</head>
<body>
     <h1 style="text-align: center;" > remplissez le formulaire  </h1>


        <div style="text-align: center;" > 
            <form action="<?php htmlspecialchars($_SERVER["PHP_SELF"]); ?> accueil.php" method="POST" >
                 <input type="text" name="name" placeholder="Nom et prenom" required> <br> <br>
                 <input type="text" name="mail" placeholder="adress mail" required > <br> <br>
               Age:<input type="number" name="age">  <br> <br>
                 <input type="password" name="password" placeholder="mot de passe" required> <br> <br>
               <!--  <input type="password" name="confirm" placeholder="confirmation" required>  <br> <br> -->   
                 <input type="text"name="username" placeholder="Nom d'utilisateur" required>  <br> <br>
                <input type="submit" value="inscription" class="button">
            </form> 
        </div>
                                       
 <br> 
 <br>
         <div><h3> Êtes vous deja un <em>GOAT</em> <a href="connexion.php"> <em>Connectez-vous!</em></a> </h3></div>




</body>
</html>