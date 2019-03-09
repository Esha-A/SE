<?php 

    $error='';  //Variable stores error message;
    
            $user = $_POST['Username'];
            $pass = $_POST['Password'];
            
            $user1 = "ec17072";
            $pass1 = "1234";

            if($user == $user1 && $pass == $pass1 ){
                header("Location: homepage.php");//Redirect to another page
            }
            else{
                echo "Username or Password is invalid";
                header('Refresh: 2; url=Login.html');
            }

?>