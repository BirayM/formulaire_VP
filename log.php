<?php 
 //if ( $_SERVER["REQUEST_METHOD"]== "POST")  { 

    if ($_SERVER["REQUEST_METHOD"] == "POST" && isset($_POST['name'])) {
                      {     
                $name= $_POST["name"];
                $mail= $_POST["mail"];
                $years= $_POST["age"];
                $code= $_POST["password"];
             // $confirm= $_POST["confirm"];
                $Uname = $_POST["username"];


                function test_input($data) {
                $data = trim($data);
                $data = stripslashes($data);
                $data = htmlspecialchars($data);
                return $data;
                    }


                    $name = test_input($_POST["name"]);
                    $mail = test_input($_POST["mail"]);
                    $years = test_input($_POST["age"]);
                    $code = test_input($_POST["password"]);
                 // $confirm = test_input($_POST["confirm"]);
                    $Uname = test_input($_POST["username"]); 
                    $code=  password_hash ($code, PASSWORD_DEFAULT) ;                   
                            }
                   
                        }
                
        ?>

        <?php 
        
        if (isset($_POST["conname"] ))
        
        
        ?>