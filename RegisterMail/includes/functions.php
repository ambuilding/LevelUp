<?php

    require_once("config.php");
    use PHPMailer\PHPMailer\PHPMailer;

    /**
     * Apologizes to user with message.
     */
    function apologize($message)
    {
        render("apology.php", ["message" => $message]);
        exit;
    }

    /**
     * Executes SQL statement, possibly with parameters, returning
     * an array of all rows in result set or false on (non-fatal) error.
     */
    function query(/* $sql [, ... ] */)
    {
        // SQL statement
        $sql = func_get_arg(0);

        // parameters, if any
        $parameters = array_slice(func_get_args(), 1);

        // try to connect to database
        static $handle;
        if (!isset($handle))
        {
            try
            {
                // connect to database
                $handle = new PDO("mysql:dbname=" . DATABASE . ";host=" . SERVER, USERNAME, PASSWORD);

                // ensure that PDO::prepare returns false when passed invalid SQL
                $handle->setAttribute(PDO::ATTR_EMULATE_PREPARES, false);
            }
            catch (Exception $e)
            {
                // trigger (big, orange) error
                trigger_error($e->getMessage(), E_USER_ERROR);
                exit;
            }
        }

        // prepare SQL statement
        $statement = $handle->prepare($sql);
        if ($statement === false)
        {
            // trigger (big, orange) error
            trigger_error($handle->errorInfo()[2], E_USER_ERROR);
            exit;
        }

        // execute SQL statement
        $results = $statement->execute($parameters);

        // return result set's rows, if any
        if ($results !== false)
        {
            return $statement->fetchAll(PDO::FETCH_ASSOC);
        }
        else
        {
            return false;
        }
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
            case "AT&T":
                $address = "{$number}@txt.att.net";
                break;

            case "Sprint":
                $address = "{$number}@messaging.sprintpcs.com";
                break;

            case "T-Mobile":
                $address = "{$number}@139.com";
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
        //$mail->Host = "smtp.fas.harvard.edu";
        $mail->Host = "smtp.gmail.com";
        $mail->Port = 587;
        $mail->SMTPSecure = "tls";

        // set From:
        $mail->SetFrom("burutanqin@gmail.com");

        // set To:
        $mail->AddAddress($address);

        // set body
        $mail->Body = $message;

        // send text
        if ($mail->Send())
        {
            return true;
        }
        else
        {
            return false;
            //die($mail->ErrorInfo);
        }
    }

?>
