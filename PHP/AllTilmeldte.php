<?php
    include('PHP/DB.php');

    $DB = new DB();

    $users = $DB->getAllUsers();

    $yeet = json_encode($users);

    echo $yeet;
?>