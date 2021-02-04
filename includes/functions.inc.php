<?php
function userExists($conn, $email){
    $sql = "SELECT * FROM users;";
    $result = mysqli_query($conn, $sql);
    while ($row = mysqli_fetch_assoc($result)){
        if($row['email'] === $email){
            $userExists = true;
        }else{
            $userExists = false;
        }
    }
return $userExists;
}

function passwordsMatch($conn, $pwd){
    $sql = "SELECT * FROM users;";
    $result = mysqli_query($conn, $sql);
    while ($row = mysqli_fetch_assoc($result)){
            $password = $row['pwd'];
            if(password_verify($pwd, $password)){
                $passMatch = true;
            }else{
                $passMatch = false;
        }
    }return $passMatch;
}



function emptyInput($insert){
    if(empty($insert)){
        $result = true;
    }else {
        $result = false;
    }
return $result;
}