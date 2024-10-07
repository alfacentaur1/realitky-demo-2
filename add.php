<?php
    if(!empty($_POST["name"]) && !empty($_POST["description"])
    && !empty($_POST["location"]) && !empty($_POST["price"]) 
    && isset($_POST["submit"])) {

        $name = $_POST["name"]; 
        $description = $_POST["description"];
        $price = $_POST["price"];
        $location = $_POST["location"];

        $json_ads = json_decode(file_get_contents("ads.json"), true);

    }else {
        header("Location: http://localhost/ucimsephp/realitky/add_form.php?error=please+fill+in+all+fields");
        exit();
    }

?>