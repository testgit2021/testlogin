<?php
include_once 'header.php';
    if(isset($_SESSION['greetingName'])){
            echo    '<div class="container bg-light rounded shadow-s w-50 mt-5 mb-5">
                    <h3 class="pt-2">Hello, ' . $_SESSION['greetingName'] . '!</h3>
                    <h4>Your account info is:</h4>
                    <p> Email address : ' . $_SESSION['email'] . '</p>
                    <p> Username : ' . $_SESSION['userName'] . '</p>
                    <p> Date of birth : ' . $_SESSION['dateofBirth'] . '</p>
                    <p> Address : ' . $_SESSION['address1'] . ' ' . $_SESSION['address2'] . ' ' . $_SESSION['city'] . ' ' . $_SESSION['zip'] . '</p>
                    <p> Telephone number : ' . $_SESSION['telephone'] . '</p>                
                    <form action="includes/logout.inc.php" method="post">
                        <button type="submit" class="btn btn-primary mb-2" name="logout">Log Out</button>
                    </form>
                    </div>';
    }else{
        header("Location: account.php");
        exit();
    }
include_once 'footer.php';