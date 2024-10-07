<?php
    session_start();
    if(!isset($_SESSION["isLoggedIn"])){
        header('Location: http://localhost/ucimsephp/realitky/sign_up_form.php?error=please+log+in+or+sign+up');
    }
    
?>

<!DOCTYPE html>
<html lang="en">
    <head>
        <title>Profile</title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link href="css/profile.css" rel="stylesheet">
    </head>
    <body>
        <main>
            <h1>Your profile</h1>
            <p>Username: <?php 
            echo $_SESSION["username"];?></p>
            <p>Email: <?php 
            echo $_SESSION["email"];?></p>

            <a href="index.php">go back</a>
        </main>
    </body>
</html>