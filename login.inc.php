<?php

    if (isset($_POST['submit'])) {

        $username = $_POST['uid'];
        $pwd = $_POST['pwd'];

        require_once 'dbh.inc.php';
        require_once 'functions.inc.php';

        if (emptyInputLogin($username, $pwd) !== false) {

            header("location: ../login.php?error=empty");
            exit();
    
        }

        loginUser($conn, $name, $pwd);

    } else {

        header("location: ../login.php");
        exit();

    }

    if (is_authenticated($conn, $username, $pwd)) {
  
        session_start();
        $_SESSION["userid"] = $row["usersId"];
        $_SESSION["useruid"] = $row["usersUid"];
        header("location: ../index.php");
        exit();
        
    } else {
        
        header("location: ../login.php?error=wronglogin");
        exit();
    }
