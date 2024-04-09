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
            <label for = "username">Username</label>
            <input type="text" name = "username" placeholder="Username">
            <label for = "pwd">Password</label>
            <input type="text" name = "pwd" placeholder="Password">
            <label for = "email">Email</label>
            <input type="text" name = "email" placeholder="Email">
            <button class="button">SIGN UP</button>
        </form>
    </div>
</body>
</html>