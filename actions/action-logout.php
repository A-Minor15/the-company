<?php
    include "../classes/User.php";

    #Create an object
    $user = new User;

    #Call the method
    $user->logout($_POST);
    # Note: $_POST -- holds our data coming from the login form
?>
