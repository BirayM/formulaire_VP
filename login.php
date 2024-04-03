


<?php 

require('logbd.php');


$con_Uname = "";
$con_code= "";

if (isset($_POST["Uname"]) and isset($_POST["confirm"]))
 {
    function test_input($data) {
        $data = trim($data);
        $data = stripslashes($data);
        $data = htmlspecialchars($data);
        return $data;
            }
     $user ="";
     $con_Uname= test_input($_POST["Uname"]);
     $con_code= test_input ($_POST["confirm"]);

     $conn = new PDO("mysql:host=$dbserver;dbname=$dbname", $userN, $passw);
     // Connexion à la base de données goat_db
     $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

     $requete = $conn->prepare("SELECT * FROM utilisateurs WHERE user_name = :Uname");
    $requete->bindParam(':Uname', $con_Uname);
    $requete->execute();
    
    $user = $requete->fetch(PDO::FETCH_ASSOC);

    if ($user) {
        // Utilisateur trouvé
        // Vérifier si le mot de passe correspond
        if (password_verify($con_code, $user['password'])) {
            // Mot de passe correct, rediriger vers la page d'accueil par exemple
            header("Location: accueil.php");
            
          
            echo $con_Uname;
           

            exit();
        } else {
            // Mot de passe incorrect
            echo "Mot de passe incorrect";
        }
    } else {
        // Utilisateur non trouvé avec cet email
        echo "Aucun utilisateur trouvé avec cet email.";
    }
}


$conn = null;

 









?>
