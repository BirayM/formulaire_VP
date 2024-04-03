<?php

 require('login.php');
 echo "$con_Uname" ;



?>






<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>ACCUEIL</title>
</head>
<body>
    <h1>BIENVENU MONSIEUR/MADAME</h1>
<h1> 
       <?php 
          
         echo $con_Uname ;
        ?>  
</h1>
 
</body>
</html>