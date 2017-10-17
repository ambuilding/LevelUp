<?php

    /**
     * Implements a registration form for Frosh IMs.
     * Submits to register.php.
     */

    // enable sessions
    session_start();

    // check counter
    if (isset($_SESSION["counter"]))
    {
        $counter = $_SESSION["counter"];
    }
    else
    {
        $counter = 0;
    }

    // increment counter
    $_SESSION["counter"] = $counter + 1;

    // array of dorms
    $DORMS = array(
     "Apley Court",
     "Canaday",
     "Grays",
     "Greenough",
     "Hollis",
     "Holworthy",
     "Hurlbut",
     "Lionel",
     "Matthews",
     "Mower",
     "Pennypacker",
     "Stoughton",
     "Straus",
     "Thayer",
     "Weld",
     "Wigglesworth"
    );

    // if form was actually submitted, check for error
    // if (isset($_POST["action"]))
    // {
    //     if (empty($_POST["name"]) || empty($_POST["gender"]) || empty($_POST["dorm"]))
    //         $error = true;
    //     redirect("index.php");
    // }
?>

<!DOCTYPE html>

<html>
    <head>
        <title>Frosh IMs</title>
    </head>
    <body style="text-align: center;">
        <h1>Register for Frosh IMs</h1>

        <?php if (isset($error)): ?>
            <div style="color: red;">You must fill out the form!</div>
        <?php endif ?>

        <form action="register.php" id="registration" method="post">
            Name: <input autofocus name="name" type="text"
                value="<?php if (isset($_POST["name"])) echo htmlspecialchars($_POST["name"]); ?>"/>
            <br/>
            <?php if (empty($_POST["captain"])): ?>
                <input name="captain" type="checkbox"/> Guitar?
            <?php else: ?>
                <input checked name="captain" type="checkbox"/> Guitar?
            <?php endif ?>

            <br/>
            <input name="gender" type="radio" value="F"/> Female
            <input name="gender" type="radio" value="M"/> Male
            <br/>

            Dorm:
            <select name="dorm">
                <option value=""></option>
                <?php
                    foreach ($DORMS as $dorm)
                    {
                        if (@$_POST["dorm"] == $dorm)
                        //if (isset($_POST["dorm"]) && $_POST["dorm"] == $dorm)
                            echo "<option selected='selected' value='$dorm'>$dorm</option>";
                        else
                            echo "<option value='$dorm'>$dorm</option>";
                    }
                ?>
            </select>
            <br/>
            <input name="action" type="submit" value="Register!"/>
            <br/>
            You have visited this site <?= $counter ?> time(s).
        </form>

        <!-- <script>
            var form = document.getElementById('registration');
            form.onsubmit = function() {
                if (form.name.value == '') {
                    alert('missing name');
                    return false;
                } else if (form.gender.value == '') {
                    alert('missing gender');
                    return false;
                } else if (form.dorm.value == '') {
                    alert('missing dorm');
                    return false;
                }
            }
        </script> -->
    </body>
</html>
