<?php
    session_start();
    session_destroy();
    $_SESSION =[];

    header('Location: http://localhost/ucimsephp/realitky/log_in_form.php');
