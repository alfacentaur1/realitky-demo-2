<?php
    session_start();
    if(!isset($_SESSION["isLoggedIn"])){
        header('Location: http://localhost/ucimsephp/realitky/sign_up_form.php?error=please+log+in+or+sign+up');
    }
?>

<!DOCTYPE html>
<html lang="en">
    <head>
        <title>Add an ad</title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link href="css/add.css" rel="stylesheet">
    </head>
    <body>
        <main>
            <h1>Add an ad</h1>
            <form action="add.php" method="post" enctype="multipart/form-data">
                <fieldset>
                    <input type="text" name="name" placeholder="Name">
                    <br>

                    <input type="text" name="location" placeholder="Location">
                    <br>

                    <input type="text" name="price" placeholder="Price">
                    <br>
                    <label for="img">Image</label>
                    <input type="file" name="img" id="img">

                    <label for="description">Decription</label>
                    <textarea name="description" id="description"></textarea>
                    <br>

                    <input type="submit" name="submit" class="submit">
                    <p><?php if(!empty($_GET["error"])){echo $_GET["error"];}?></p>
                </fieldset>
            </form>
            <a href="index.php">go back</a>

        </main>
    </body>
</html>