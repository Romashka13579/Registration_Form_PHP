<?php
    require_once 'includes/config_session.inc.php';
    require_once 'includes/signup_view.inc.php';
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/style.css">
    <title>Sign UP</title>
</head>
<body>
    <div class="main">
        <div class="header">SIGN UP SYSTEM</div>
        <form class="form" action = "includes/signup.inc.php" method = "post">
            <?php
            signup_inputs();
            ?>
            <button class="button">SIGN UP</button>
        </form>

        <?php
            check_signup_errors();
        ?>
    </div>
</body>
</html>