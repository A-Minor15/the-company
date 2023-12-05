<?php
    include "../classes/User.php";

    # Create an object
    $user = new User;
    $user->deleteUser($_POST);
    // Note: $_POST -- holds our data coming from the edit form
    // and the $_FILES -- holds an array of items uploaded to the current script via
    // the HTTP POST method
?>