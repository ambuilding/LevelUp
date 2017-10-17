<?php
    /***********************************************************************

     * Implements a registration form for Frosh IMs.  Records registration
     * in database.  Redirects user to froshims8.php upon error.
     **********************************************************************/

    // validate submission
    if (empty($_POST["name"]) || empty($_POST["gender"]) || empty($_POST["dorm"]))
    {
        {
        redirect("froshims8.php");
        exit;
    }

    // redirect user to home page, using absolute path, per
    function redirect($file) {
        $host = $_SERVER['HTTP_HOST'];
        $path = rtrim(dirname($_SERVER["PHP_SELF"]), "/\\");
        header("Location: http://$host$path/$file");
        exit;
    }

    // connect to database
    mysql_connect("localhost", "jharvard", "crimson");
    mysql_select_db("jharvard_froshims");

    // scrub inputs
    $name = mysql_real_escape_string($_POST["name"]);
    if ($_POST["captain"])
        $captain = 1;
    else
        $captain = 0;
    $gender = mysql_real_escape_string($_POST["gender"]);
    $dorm = mysql_real_escape_string($_POST["dorm"]);

    // prepare query
    $sql = "INSERT INTO registrants (name, captain, gender, dorm)
     VALUES('$name', $captain, '$gender', '$dorm')";

    // execute query
    mysql_query($sql);
?>

<!DOCTYPE html>

<html>
  <head>
    <title>Frosh IMs</title>
  </head>
  <body>
    You are registered!  (Really.)
  </body>
</html>
