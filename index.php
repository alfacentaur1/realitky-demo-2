<?php
    session_start();
    if(!isset($_SESSION["isLoggedIn"])){
        header('Location: http://localhost/ucimsephp/realitky/sign_up_form.php?error=please+log+in+or+sign+up');
    }

?>

<!DOCTYPE html>
<html lang="en">
    <head>
        <title>Main page</title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link href="css/main_page.css" rel="stylesheet">
    </head>
    <body>
        <header>
            <nav>
                <ul>
                    <li><a href="profile.php">profile</a></li>
                    <li><a href="log_out.php">log out</a></li>
                    <li><a href="add_form.php">add advertisement</a></li>
                </ul>
            </nav>
        </header> 
    </body>
</html>