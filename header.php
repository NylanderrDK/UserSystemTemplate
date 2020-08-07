<?php
    session_start();
?>
<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>User System</title>

        <!-- Bootstrap CSS -->
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
        <!-- Custom CSS -->
        <link rel="stylesheet" href="css/style.css">
    </head>
    <body>
        
        <header>
            <nav class="navbar navbar-expand-lg navbar-light bg-light">
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#mobileNav" aria-controls="Toggle Navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse" id="mobileNav">
                    <div class="container">
                        <a href="index.php" class="navbar-brand">Hidden Brand</a>
                        <ul class="navbar-nav ml-auto mt-2 mt-lg-0">
                            <li class="nav-item active">
                                <a href="index.php" class="nav-link">Home <span class="sr-only">(current)</span></a>
                            </li>
                            <?php
                                if(!isset($_SESSION['userID'])) {
                                    echo '<li class="nav-item"> <a href="signup.php" class="nav-link">Signup</a> </li>';
                                    echo '<li class="nav-item"> <a class="nav-link pointerCursor" data-toggle="modal" data-target="#loginModal">Login</a> </li>';
                                }
                                if(isset($_SESSION['userID'])) {
                                    echo '<li class="nav-item"> <a href="profile.php" class="nav-link">Profile</a> </li>';
                                }
                            ?>
                        </ul>
                        <?php 
                            if(isset($_SESSION['userID'])) {
                                echo '<form class="form-inline my-2 my-lg-0" action="includes/logout.inc.php" method="post"> <button class="btn btn-outline-danger my-2 my-sm-0" type="submit" name="logout-submit">Log out</button> </form>';
                            }
                        ?>
                    </div>
                </div>
            </nav>
        </header>
    