<?php
    session_start();

    if (!empty($_POST["username"]) && !empty($_POST["password"]) && !empty($_POST["submit"])
    && !empty($_POST["email"])) {
        $username = $_POST["username"];
        $password = $_POST["password"];
        $email = $_POST["email"];

        #reading json

        $json_docs = json_decode(file_get_contents("users.json"),true);

        #checking if username is taken
        #$username_json je jmeno a $user je as pole

        foreach($json_docs as $username_json => $user) {
            if($username_json === $username) {
                header('Location: http://localhost/ucimsephp/realitky/sign_up_form.php?error=username+is+taken');
                exit(); //zastaví další vykonávání skriptu
            }
        }

        #hashing password
        $hashed_password = password_hash($password, PASSWORD_DEFAULT);

        #parametr username
        $json_docs[$username] = [
            "password" => $hashed_password,
            "email" => $email
        ];
            


        #adding to json
        file_put_contents("users.json",json_encode($json_docs));

        #session
        $_SESSION["isLoggedIn"] = true;
        $_SESSION["username"] = $username;
        $_SESSION["email"] = $email;

        header('Location: http://localhost/ucimsephp/realitky/index.php');

    }else {
        header('Location:http://localhost/ucimsephp/realitky/sign_up_form.php?error=please+fill+in+all+fields');
    }