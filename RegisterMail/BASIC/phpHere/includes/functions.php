<?php

    require_once("config.php");

    /**
     * Apologizes to user with message.
     */
    function apologize($message)
    {
        render("apology.php", ["message" => $message]);
        exit;
    }

    /**
     * Renders template, passing in values.
     */
    function render($template, $values = [])
    {
        // if template exists, render it
        if (file_exists("../templates/$template"))
        {
            // extract variables into local scope
            extract($values);

            // render header
            require("../templates/header.php");

            // render template
            require("../templates/$template");

            // render footer
            require("../templates/footer.php");
        }

        // else err
        else
        {
            trigger_error("Invalid template: $template", E_USER_ERROR);
        }
    }

    /**
     * Sends a text. Returns true on success, else false.
     */
    function text($number, $carrier, $message)
    {
        // determine address
        switch ($carrier)
        {
            case 'China-Mobile':
                $address = "{$number}@139.com";
                break;
            case "AT&T":
                $address = "{$number}@txt.att.net";
                break;

            case "Sprint":
                $address = "{$number}@messaging.sprintpcs.com";
                break;

            case "T-Mobile":
                $address = "{$number}@tmomail.net";
                break;

            case "Verizon":
                $address = "{$number}@vtext.com";
                break;
        }
        if (!isset($address))
        {
            return false;
        }

        // instantiate mailer
        $mail = new PHPMailer();

        // use SMTP
        $mail->IsSMTP();
        $mail->Host = "smtp.gmail.com";
        $mail->Password = "secret";
        $mail->Port = 587;
        $mail->SMTPAuth = true;
        $mail->SMTPSecure = "tls";
        $mail->Username = "burutanqin@gmail.com";

        // set To:
        $mail->AddAddress($address);

        // set body
        $mail->Body = $message;

        // send text
        if ($mail->send())
        {
            return true;
        }
        else
        {
            return false;
        }
    }

?>
