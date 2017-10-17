<?php
    /***********************************************************************
     * Implements a registration form for Frosh IMs.  Informs user of
     * any errors.
     **********************************************************************/
?>

<!DOCTYPE html>

<html>
  <head>
    <title>Frosh IMs</title>
  </head>
  <body>
    <!-- <pre>
      <?php print_r($_POST); ?>
    </pre> -->
    <?php if (empty($_POST["name"]) || empty($_POST["gender"]) || empty($_POST["dorm"])): ?>
      You must provide your name, gender, and dorm!  Go <a href="froshims2.php">back</a>.
    <?php else: ?>
      You are registered!  (Well, not really.)
    <?php endif ?>
  </body>
</html>
