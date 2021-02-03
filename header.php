<?php
session_start();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta content="robot" rel="noindex, nofollow">
    <link href="https://fonts.googleapis.com/css?family=Roboto" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-giJF6kkoqNQ00vy+HMDP7azOuL0xtbfIcaT9wjKHr8RbDVddVHyTfAAsrekwKmP1" crossorigin="anonymous">
    <link href="pricing.css" rel="stylesheet">
    <title>GsmBox.ro</title>
</head>
<body>
<main>
    <nav class="navbar fix-top navbar-expand-lg navbar-light bg-light">
        <div class="container-lg">
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarTogglerDemo03" aria-controls="navbarTogglerDemo03" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <a class="navbar-brand" href="index.php"><img src="images/logo-gsm-box.jpg" alt="logo gsm box" height=30></a>
            <div class="collapse navbar-collapse" id="navbarTogglerDemo03">
            <ul class="navbar-nav mb-2 mb-lg-0">
                <li class="nav-item">
                    <a class="nav-link active me-2" aria-current="page" href="index.php">Home</a>
                </li>
                <li class="nav-item">
                    <form class="d-flex">
                        <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
                        <button class="btn btn-outline-success" type="submit">Search</button>
                    </form>
                </li>
                <li class="nav-item">
                    <div class="dropdown">
                        <a class="nav-link active me-2" href="account.php" data-bs-toggle="dropdown" aria-expanded="false">My account <img src="images/caret-down-fill.svg" alt="account"></a>
                        <ul class="dropdown-menu" aria-labelledby="dropdownMenuLink">
                            <?php if(isset($_SESSION['greetingName'])){
                                echo '
                                <li><a class="dropdown-item" href="account-info.php">Account info</a></li>
                                <li><a class="dropdown-item" href="#">Orders</a></li>
                                <li><a class="dropdown-item" href="includes/logout.inc.php">Log Out</a></li>';
                                
                            }else{ 
                                echo '   
                                    <li><a class="dropdown-item" href="signup.php">Create account</a></li>
                                <li><a class="dropdown-item" href="account.php">Sign In</a></li>';
                            }?>
                        </ul>
                    </div>
                </li>
                <li class="nav-item">
                    <a class="nav-link active me-2" href="favourites.php"><span><img src="images/heart.svg" alt="favourites"></span> Favourites <img src="images/caret-down-fill.svg" alt="favourites"></a>
                </li>
                <li class="nav-item">
                    <a class="nav-link active me-2" href="cart.php"><img src="images/cart3.svg" alt="cart"></span> Cart <img src="images/caret-down-fill.svg" alt="cart"></a>
                </li>
                <?php
                if(isset($_SESSION['greetingName'])){
                    echo '<li class="nav-item pt-2">
                            Wellcome, ' . $_SESSION['greetingName'] . '!
                          </li>';
                }?>
            </ul>
            </div>
        </div>
</nav>
<div class="container-lg ">