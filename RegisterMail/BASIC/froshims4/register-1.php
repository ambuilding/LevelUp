<?php

    /**
     * Implements a registration form for Frosh IMs.  Redirects
     * user to froshims-1.php upon error.
     */

    // validate submission
    if (empty($_POST["name"]) || empty($_POST["gender"]) || empty($_POST["dorm"]))
    {
        header("Location: http://localhost:8888/froshims-1.php");
        exit;
    }

?>

<!DOCTYPE html>

<html>
    <head>
        <title>Frosh IMs</title>
    </head>
    <body>
        You are registered!  (Well, not really.)
    </body>
</html>
