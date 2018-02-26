<?php
    if(isset($_SESSION["logged_in"])){
    header ("location: admin.php");
    }
    function login($email, $password){
        $user1 = "daniel";
        $password1 = "1234";
        if(isset($email)){
            if($email and $password == $password1){
                header("location: admin.php");
                $_SESSION["logged_in"] = true;
            }
            else{
                echo "Wrong username and/or password";
            }
        }
    }
?>
