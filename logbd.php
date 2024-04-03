



<?php 
require('log.php');

$dbserver= "localhost";
$dbname="goat_db";
$userN="root";
$passw="";
 


/* try {
    $conn= new PDO("mysql:host=$dbserver;$dbname", $userN, $passw) ;
    // connexion a la base de donnée goat_bd
    $conn-> setAttribute (PDO ::ATTR_ERRMODE, PDO ::ERRMODE_EXCEPTION);
    echo "connexion reussi" . "<br>" .  "";
    
      $query= "USE goat_db";
     $sql = "INSERT INTO `utilisateurs` (name)
     VALUES (':name') " ;                              //  c'est important
     $conn->exec($query);
    // $conn->exec($sql); ce n'est pas l'erreur 

     //preparation de l'insertion 
     $requete = $conn->prepare($sql);
    
    //liaison des requetes avec bindparam

    $requete-> bindParam(':name', $name);

    // exécution de la requête
    $requete->execute();
    

    echo "enregistrement reussi";
                     }  
    
    catch (PDOException $e) {
      echo "Connexion échouée : " . $e->getMessage();

        echo   "echec d'enregistrement :" . $sql . "<br>" . $e->getMessage();
    }
    $conn = null ; */

    if (!empty($name)) {

    try {
        $conn = new PDO("mysql:host=$dbserver;dbname=$dbname", $userN, $passw);
        // Connexion à la base de données goat_db
        $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        echo "Connexion réussie" . "<br>";
    
        // Préparation de la requête d'insertion
        $sql = "INSERT INTO utilisateurs (name, mail, age, password, user_name ) 
        VALUES (:name, :mail, :years, :code, :Uname)";
        $requete = $conn->prepare($sql);
    
        // Liaison des paramètres de la requête avec les valeurs du formulaire
        $requete->bindParam(':name', $name);
        $requete->bindParam(':mail', $mail);
        $requete->bindParam(':years', $years);
        $requete->bindParam(':code', $code);
        $requete-> bindParam(':Uname',$Uname);
    
    
        // Exécution de la requête
        $requete->execute();
    
        echo "Enregistrement réussi";
    } catch (PDOException $e) {
        echo "Échec d'enregistrement : " . $e->getMessage();
    }
    
    $conn = null;
         }
    ?>






