<?php
session_start();
include_once 'dbh.inc.php';
include_once 'functions.inc.php';
if(isset($_POST['submit'])){
    $email = mysqli_real_escape_string($conn, $_POST['email']);
    $pwd = mysqli_real_escape_string($conn, $_POST['password']);
    $checkPwd = mysqli_real_escape_string($conn, $_POST['checkpassword']);
    $uid = mysqli_real_escape_string($conn, $_POST['uid']);
    $firstname = mysqli_real_escape_string($conn, $_POST['firstname']);
    $lastname = mysqli_real_escape_string($conn, $_POST['lastname']);
    $dob = mysqli_real_escape_string($conn, $_POST['dob']);
    $adr1 = mysqli_real_escape_string($conn, $_POST['address1']);
    $adr2 = mysqli_real_escape_string($conn, $_POST['address2']);
    $city = mysqli_real_escape_string($conn, $_POST['city']);
    $state = mysqli_real_escape_string($conn, $_POST['state']);
    $zip = mysqli_real_escape_string($conn, $_POST['zip']);
    $phone = mysqli_real_escape_string($conn, $_POST['phone']);
    $checkBox = mysqli_real_escape_string($conn, $_POST['checkbox']);
    $pwdHashed = password_hash($pwd, PASSWORD_DEFAULT);    
    
    if(userExists($conn, $email)){
        if(!empty($pwd) && passwordsMatch($conn, $pwd)){
            $sql = "SELECT * FROM users;";
            $result = mysqli_query($conn, $sql);
            while ($row = mysqli_fetch_assoc($result)){
                if(password_verify($pwd, $row['pwd'])){
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
        }
    }
            header("Location: ../index.php");
            exit();
        }else{
        header("Location: ../account.php?userexists");
        exit();
        }
    }else{
            if(emptyInput($email) || emptyInput($pwd) || emptyInput($checkPwd) || emptyInput($uid) || emptyInput($firstname) || emptyInput($lastname) || emptyInput($dob) || emptyInput($adr1) || emptyInput($adr2) || emptyInput($city) || emptyInput($zip) ||  emptyInput($state) || emptyInput($phone) || emptyInput($phone)){
                $_POST['email'] = $email;
                $_POST['username'] = $uid;
                $_POST['firstname'] = $firstname;
                $_POST['lastname'] = $lastname;
                $_POST['dob'] = $dob;
                $_POST['addr1'] = $adr1;
                $_POST['addr2'] = $adr2;
                $_POST['city'] = $city;
                $_POST['zip'] = $zip;
                $_POST['phone'] = $phone;
                $_POST['state'] = $state;
                $_POST['checkbox'] = $checkBox;
                header("Location: ../signup.php?email=" . $_POST['email'] . "&username=" . $_POST['username'] . "&firstname=" . $_POST['firstname'] . "&lastname=" . $_POST['lastname'] . "&dob=" . $_POST['dob'] . "&addr1=" . $_POST['addr1'] . "&addr2=" . $_POST['addr2'] . "&city=" . $_POST['city'] . "&zip=" . $_POST['zip'] . "&phone=" . $_POST['phone'] . "&state=" . $_POST['state'] . "&checkbox=" . $_POST['checkbox'] .  "&empty");
                exit();
            }else{
                if($pwd !== $checkPwd){
                    $_POST['email'] = $email;
                    $_POST['username'] = $uid;
                    $_POST['firstname'] = $firstname;
                    $_POST['lastname'] = $lastname;
                    $_POST['dob'] = $dob;
                    $_POST['addr1'] = $adr1;
                    $_POST['addr2'] = $adr2;
                    $_POST['city'] = $city;
                    $_POST['zip'] = $zip;
                    $_POST['phone'] = $phone;
                    $_POST['state'] = $state;
                    $_POST['checkbox'] = $checkBox;
                    header("Location: ../signup.php?email=" . $_POST['email'] . "&firstname=" . $_POST['firstname'] . "&lastname=" . $_POST['lastname'] . "&username=" . $_POST['username'] . "&dob=" . $_POST['dob'] . "&addr1=" . $_POST['addr1'] . "&addr2=" . $_POST['addr2'] . "&city=" . $_POST['city'] . "&zip=" . $_POST['zip'] . "&phone=" . $_POST['phone'] . "&state=" . $_POST['state'] . "&checkbox=" . $_POST['checkbox'] . "&passdontmatch");
                    exit();
                }else{
                    $sql = "INSERT INTO users (email, pwd, firstName, lastName, userName, address1, address2, city,  state, zip, telephone, dateofBirth) VALUES (?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?);";
                    $stmt = mysqli_stmt_init($conn);
                    if(!mysqli_stmt_prepare($stmt, $sql)){
                        echo "SQL statement error";
                    }else{
                    mysqli_stmt_bind_param($stmt, "ssssssssssss", $email, $pwdHashed, $firstname, $lastname, $uid, $adr1, $adr2, $city, $state, $zip, $phone, $dob);
                    mysqli_stmt_execute($stmt);
                    }
                    $_SESSION['greetingName'] = $firstname . ' ' . $lastname;
                    $_SESSION['email'] = $email;
                    $_SESSION['firstName'] = $firstname;
                    $_SESSION['lastName'] = $lastname;
                    $_SESSION['userName'] = $uid;
                    $_SESSION['address1'] = $adr1;
                    $_SESSION['address2'] = $adr2;
                    $_SESSION['city'] = $city;
                    $_SESSION['zip'] = $zip;
                    $_SESSION['telephone'] = $phone;
                    $_SESSION['dateofBirth'] = $dob;
                    $_SESSION['state'] = $state;
                    header("Location: ../index.php");
                    exit();
                }
        }
    }
}
else{
    echo 'Use submit button';
}