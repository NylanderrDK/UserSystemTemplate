<?php
if(isset($_POST['login-submit'])) {
    // Connect to database
    require 'dbh.inc.php';

    // Variables from login form
    $mailuid = $_POST['mailuid'];
    $password = $_POST['pwd'];

    // Error handler
    if(empty($mailuid) || empty($password)) {
        header("Location: ../index.php?error=emptyFields");
        exit();
    } else {
        $sql = "SELECT * FROM users WHERE uidUsers = ? OR emailUsers = ?;";
        $stmt = mysqli_stmt_init($conn);
        if(!mysqli_stmt_prepare($stmt, $sql)) {
            header("Location: ../index.php?error=sqlError");
            exit();
        } else {
            mysqli_stmt_bind_param($stmt, "ss", $mailuid, $mailuid);
            mysqli_stmt_execute($stmt);
            $result = mysqli_stmt_get_result($stmt);
            if($row = mysqli_fetch_assoc($result)) {
                $pwdCheck = password_verify($password, $row['pwdUsers']);
                if($pwdCheck  == false) {
                    header("Location: ../index.php?error=wrongPassword");
                    exit();
                } else if($pwdCheck == true) {
                    session_start();
                    $_SESSION['userID'] = $row['idUsers'];
                    $_SESSION['userUID'] = $row['uidUsers'];
                    $_SESSION['userMail'] = $row['emailUsers'];
                    header("Location: ../index.php?login=success");
                    exit();
                } else {
                    header("Location: ../index.php?error=wrongPassword");
                    exit();
                }
            } else {
                header("Location: ../index.php?error=wrongPassword");
                exit();
            }
        }
    }
} else {
    header("Location: ../index.php");
    exit();
}