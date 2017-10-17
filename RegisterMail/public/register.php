<?php

    require("../includes/config.php");

    // ensure user has provided name
    if (empty($_POST["name"]))
    {
        apologize("Missing name!");
    }

    // ensure user has provided number
    if (empty($_POST["number"]))
    {
        apologize("Missing number!");
    }

    // ensure user has provided carrier
    if (empty($_POST["carrier"]))
    {
        apologize("Missing carrier!");
    }

    // remove non-digits from number
    $number = preg_replace("/[^\d]/", "", $_POST["number"]);

    // ensure number is 10 digits
    if (strlen($number) != 10)
    {
        apologize("Invalid number!");
    }

    // INSERT row into users table
    query("INSERT INTO users (name, number, carrier) VALUES(?, ?, ?)", $_POST["name"], $number, $_POST["carrier"]);

    // report success
    render("success.php");

?>
