<?php
include_once 'header.php';
?>
<div class="container rounded shadow-sm mt-2 mb-2">
    
    <?php
        if(isset($_GET['userexists'])){
            echo '
            <p>You have an account! Please enter password to log in!</p>
            <form class="form-control" action="includes/login.inc.php" method="post">
                    <label for="inputPassword4" class="form-label">Password</label>
                    <input type="password" class="form-control mb-2" name="pwd" id="inputPassword4">
                    <button type="submit" class="btn btn-primary" name="pass">Continue</button></div>
            </form>';

        }else{
        if(isset($_GET['passincorrect'])){
            echo '
            <p class="text-danger">The password is incorect!</p>
            <form class="form-control" action="includes/login.inc.php" method="post">
                    <label for="inputPassword4" class="form-label">Password</label>
                    <input type="password" class="form-control mb-2" name="pwd" id="inputPassword4">
                    <button type="submit" class="btn btn-primary" name="pass">Continue</button></div>
            </form>';
        }else{ 
            if(isset($_GET['userdoesnotexist'])){
            echo '
            <p class="text-danger">The user with the email you typed does not exist!</p>
            <form class="form-control" action="includes/login.inc.php" method="post">
                <label for="inputEmail4" class="form-label">Email</label>
                <input type="email" class="form-control mb-2" name="email" id="inputEmail4">
                <button type="submit" class="btn btn-primary" name="mail">Continue</button>
            </form>';
            }else{ 
            echo '
            <form class="form-control" action="includes/login.inc.php" method="post">
                <label for="inputEmail4" class="form-label">Email</label>
                <input type="email" class="form-control mb-2" name="email" id="inputEmail4">
                <button type="submit" class="btn btn-primary" name="mail">Continue</button>
            </form>';
        }
        }
    }      
    ?>
    </form>
</div>
<?php
include_once 'footer.php';