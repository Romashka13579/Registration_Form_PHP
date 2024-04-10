<?php

if ($_SERVER["REQUEST_METHOD"] === "POST"){
    $username = $_POST["username"];
    $pwd = $_POST["pwd"];

    try {

        require_once 'dbh.inc.php';
        require_once 'login_model.inc.php';
        require_once 'login_contr.inc.php';

        //ERROR HANDLER
        $errors = [];
    
        if(is_input_empty($username, $pwd)){
            $errors["empty_input"] = "Fill in all fields";
        }
    
        $result = get_user($pdo, $username);
    
        if(is_username_wrong($result)){
            $errors["wrong_username"] = "Wrong Username";
        }
    
        if(!is_username_wrong($result) && is_pwd_wrong($pwd, $result["pwd"])){
            $errors["wrong_password"] = "Wrong Password";
        }
    
        require_once 'config_session.inc.php';
        
        if($errors){
            $_SESSION['errors_login'] = $errors;
    
            header("Location: ../index.php");
            die();
        }

        $newSessionId = session_create_id();
        $sessionId = $newSessionId . "_" . $result["id"];
        session_id($sessionId);

    } catch (PDOException $e) {
        die($e->getMessage());
    }
}
else{
    header("Location: ../index.php");
    die();
}