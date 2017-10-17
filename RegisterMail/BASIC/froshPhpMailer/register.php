<?php

    /**
     * Implements a registration form for Frosh IMs.  Reports registration
     * via email.  Redirects user to froshims-3.php upon error.
     */

    // require PHPMailer
    require 'vendor/autoload.php';

    // validate submission
    if (!empty($_POST["name"]) && !empty($_POST["gender"]) && !empty($_POST["dorm"]))
    {
        // instantiate mailer
        $mail = new PHPMailer();

        // use SMTP
        $mail->IsSMTP();

        //Enable SMTP debugging
        // 0 = off (for production use)
        // 1 = client messages
        // 2 = client and server messages
        $mail->SMTPDebug = 2;
        $mail->Debugoutput = "html";
        $mail->Host = "smtp.gmail.com";
        $mail->Port = 587;
        $mail->SMTPSecure = "tls";
        // Whether to use SMTP authentication
        $mail->SMTPAuth = true;

        //Username to use for SMTP authentication - use full email address for gmail
        $mail->Username = "burutanqin@gmail.com";
        //Password to use for SMTP authentication
        $mail->Password = "secret";

        // set From:
        $mail->SetFrom("burutanqin@gmail.com");

        // set To:
        $mail->AddAddress("burutanqin@gmail.com");

        // set Subject:
        $mail->Subject = "registration";

        // set body
        $mail->Body =
            "This person just registered:\n\n" .
            "Name: " . $_POST["name"] . "\n" .
            "Captain: " . $_POST["captain"] . "\n" .
            "Gender: " . $_POST["gender"] . "\n" .
            "Dorm: " . $_POST["dorm"];

        // send mail
        if ($mail->send() == false)
        {
            die($mail->ErrorInfo);
        }
    }
    else
    {
        redirect("index.php");
    }

    // redirect user to home page, using absolute path, per
    function redirect($file) {
        $host = $_SERVER['HTTP_HOST'];
        $path = rtrim(dirname($_SERVER["PHP_SELF"]), "/\\");
        header("Location: http://$host$path/$file");
        exit;
    }
?>

<!DOCTYPE html>

<html>
    <head>
        <title>Frosh IMs</title>
    </head>
    <body>
        You are registered! (Really.)
    </body>
</html>
