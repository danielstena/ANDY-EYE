<?php 
session_start();
    require "functions.php"; 
    login($_POST["email"], $_POST["password"]);
    require  "header.php";
    ?>
    <div id="wrapper">
        <h1> Admin  </h1>
        <form action="adminlogin.php" method="POST">
            <input type="text" name="email" value="email">
            <input type="password" name="password" value="password">
            <input type="submit" value="login">
        </form>
    </div>
    
    <?php require  "footer.php" ?>