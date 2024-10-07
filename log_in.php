<?php
    session_start();

    if (!empty($_POST["username"]) && !empty($_POST["password"]) && isset($_POST["submit"])){
        $username = $_POST["username"];
        $password = $_POST["password"];

        #compare password and username, if all correct session = true

        $users = json_decode(file_get_contents("users.json"),true);
        foreach($users as $username_json => $user) {
            if ($username === $username_json) {
                if (password_verify($password, $users[$username_json]["password"])){
                    $_SESSION["isLoggedIn"] = true;
                    $_SESSION["username"] = $username;
                    $_SESSION["email"] = $users[$username]["email"];
                    header('Location: http://localhost/ucimsephp/realitky/index.php');
                }else {
                    header('Location: http://localhost/ucimsephp/realitky/log_in_form.php?error=incorrect+username+or+password&username='.$username);
                }
            }else {
                header('Location: http://localhost/ucimsephp/realitky/log_in_form.php?error=incorrect+username+or+password&username='.$username);
            }
        }

        
    }else {
        header('Location:http://localhost/ucimsephp/realitky/log_in_form.php?error=incorrect+username+or+password');
    }