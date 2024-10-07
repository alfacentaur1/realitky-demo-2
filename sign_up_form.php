<!DOCTYPE html>
<html lang="en">
    <head>
        <title>Sign up</title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link href="css/forms.css" rel="stylesheet">
    </head>
    <body>
        <form action="sign_up.php" method="post">
            <fieldset>
                <h1>Sign up</h1>
                <h2>Welcome</h2>

                <label for="username">username</label>
                <input type="text" id="username" name="username">
                <br>
                <label for="email">email</label>
                <input type="email" id="email" name="email">
                <br>
                <label for="password">password</label>
                <input type="password" id="password" name="password">
                <br>
                <input type="submit" name="submit" class="submit">
                <p>Already have account? <a href="log_in_form.php">Log in</a> now!</p>
                <p>
                <?php
                if(isset($_GET["error"])) {
                    echo $_GET["error"];
                }
                ?>
                </p>
            </fieldset>
        </form>
    </body>
</html>