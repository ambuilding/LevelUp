<?php
    /***********************************************************************
     * Implements a registration form for Frosh IMs.  Reports registration
     * via email.  Redirects user to froshims3.php upon error.
     * 由_www@macbook-pro.local代发
     **********************************************************************/

    // validate submission
    if (!empty($_POST["name"]) && !empty($_POST["gender"]) && !empty($_POST["dorm"]))
    {

        $to = "jmxcn@sina.cn";
        $subject = "Registration";
        $body = "This person just registered:\n\n" .
         $_POST["name"] . "\n" .
         $_POST["captain"] . "\n" .
         $_POST["gender"] . "\n" .
         $_POST["dorm"];
        $headers = 'From: burutanqin@gmail.com' . "\r\n" .
            'Reply-To: burutanqin@gmail.com' . "\r\n" .
            'X-Mailer: PHP/' . phpversion();
        //$headers = "From: malan@cs50.net\r\n";
        mail($to, $subject, $body, $headers);
    }
    else
    {
        redirect("froshims.php");
        exit;
    }

    // redirect user to home page, using absolute path, per
    function redirect($file) {
        $host = $_SERVER['HTTP_HOST'];
        $path = rtrim(dirname($_SERVER["PHP_SELF"]), "/\\");
        header("Location: http://$host$path/$file");
        exit;
    }

    function check_email($email)
    {
        if(preg_match('/(@.*@)|(\.\.)|(@\.)|(^\.)/', $email) || preg_match(pattern, subject)) {}
    }
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
