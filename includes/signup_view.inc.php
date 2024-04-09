<?php

declare(strict_types=1);

function signup_inputs() {
    echo '<label for = "pwd">Username</label>';
    if(isset($_SESSION['signup_data']["username"]) && !isset($_SESSION['errors_signup']["username_taken"])){
        echo '<input type="text" name = "username" placeholder="Username" value="' . $_SESSION['signup_data']["username"] . '">';
    }
    else{
        echo '<input type="text" name = "username" placeholder="Username">';
    }

    echo '<label for = "pwd">Password</label>';
    echo '<input type="text" name = "pwd" placeholder="Password">';
    echo '<label for = "pwd">Email</label>';

    if(isset($_SESSION['signup_data']["email"]) && !isset($_SESSION['errors_signup']["email_registered"]) && !isset($_SESSION['errors_signup']["email_invalid"])){
        echo '<input type="text" name = "email" placeholder="Email" value="' . $_SESSION['signup_data']["email"] . '">';
    }
    else{
        echo '<input type="text" name = "email" placeholder="Email">';
    }
}

function check_signup_errors(){
    if(isset($_SESSION['errors_signup'])){
        $errors = $_SESSION['errors_signup'];

        echo "<br>";

        foreach ($errors as $error){
            echo "<br>" . $error;
        }

        unset($_SESSION['errors_signup']);
    }
    else if(isset($_GET["signup"]) && $_GET["signup"] === "success"){
        echo "<br>";
        echo "SignUP success";
    }
}