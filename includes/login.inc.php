<?php
include 'dbh.inc.php'; 
include 'functions.inc.php';

if(isset($_POST['mail'])){
        $email = mysqli_real_escape_string($conn, $_POST['email']);
        if(userExists($conn, $email)){
                header("Location: ../account.php?userexists");
                exit();
        }else{
            header("Location: ../account.php?userdoesnotexist");
            exit();
        }
    }
    elseif(isset($_POST['pass'])){
        $pwd = mysqli_real_escape_string($conn, $_POST['pwd']);
        if(passwordsMatch($conn, $pwd)){
            $sql = "SELECT * FROM users WHERE pwd='$pwd';";
            $result = mysqli_query($conn, $sql);
            $row = mysqli_fetch_assoc($result);
            $_SESSION['greetingName'] = $row['firstName']. ' ' . $row['lastName'];
            $_SESSION['email'] = $row['email'];
            $_SESSION['firstName'] = $row['firstName'];
            $_SESSION['lastName'] = $row['lastName'];
            $_SESSION['userName'] = $row['userName'];
            $_SESSION['address1'] = $row['address1'];
            $_SESSION['address2'] = $row['address2'];
            $_SESSION['city'] = $row['city'];
            $_SESSION['zip'] = $row['zip'];
            $_SESSION['telephone'] = $row['telephone'];
            $_SESSION['dateofBirth'] = $row['dateofBirth'];
        header("Location: ../index.php?loginsuccess");
        exit();
    }else{
        header("Location: ../account.php?passincorrect");
        exit();
    }
}else{
    echo "Use the submitt button!";
}