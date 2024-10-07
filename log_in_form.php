<!DOCTYPE html>
<html lang="en">
    <head>
        <title>Log in</title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link href="css/forms.css" rel="stylesheet">
    </head>
    <body>

    <form action="log_in.php" method="post">
        <fieldset>
            <h1>Log in</h1>
            <h2>Welcome</h2>
            <label for="username">username</label>
            <input type="text" name="username" id="username" value=<?php if(isset($_GET["username"])) {echo $_GET["username"];}?>>
            <br>

            <label for="password">password</label>
            <input type="password" name="password" id="password">
            <br>
            <input type="submit" name="submit" class="submit">

            <p>Don't have account? <a href="sign_up_form.php">Sign up</a> now!</p>
            <p>
                <?php 
                    if(isset($_GET["error"])){
                        echo $_GET["error"];
                    }
                ?>
            </p>
        </fieldset>
    </form>
    
    </body>
</html>