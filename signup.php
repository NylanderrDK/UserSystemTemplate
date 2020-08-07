<?php
    require 'header.php';
?>

    <main>
        <div class="container mt-2">
            <h1 class="text-center">Signup</h1>
            <?php
                if(isset($_GET['error'])) {
                    if($_GET['error'] == "emptyFields") {
                        echo '<div class="alert alert-danger" role="alert"> You need to fill in all fields! </div>';
                    } else if($_GET['error'] == "invalidMailUID") {
                        echo '<div class="alert alert-danger" role="alert"> Invalid username and e-mail! </div>';
                    } else if($_GET['error'] == "invalidEmail") {
                        echo '<div class="alert alert-danger" role="alert"> Invalid e-mail! </div>';
                    } else if($_GET['error'] == "invalidUID") {
                        echo '<div class="alert alert-danger" role="alert"> Invalid username! </div>';
                    } else if($_GET['error'] == "passwordCheck") {
                        echo '<div class="alert alert-danger" role="alert"> The passwords does not match! </div>';
                    } else if($_GET['error'] == "usernameTaken") {
                        echo '<div class="alert alert-danger" role="alert"> Username is already taken! </div>';
                    } else if($_GET['error'] == "sqlError") {
                        echo '<div class="alert alert-danger" role="alert"> SQL ERROR: Please contact the support! </div>';
                    }
                }
                if(isset($_GET['signup']) == "success") {
                    echo '<div class="alert alert-success" role="alert"> Registration successfull! </div>';
                }
            ?>
            <form action="includes/signup.inc.php" method="POST">
                <div class="form-group">
                    <label for="uid">Username</label>
                    <input type="text" name="uid" placeholder="Username" class="form-control">
                </div>
                <div class="form-group">
                    <label for="mail">E-Mail</label>
                    <input type="mail" name="mail" placeholder="E-Mail" class="form-control">
                </div>
                <div class="form-group">
                    <label for="pwd">Password</label>
                    <input type="password" name="pwd" placeholder="Password" class="form-control">
                </div>
                <div class="form-group">
                    <label for="pwd-repeat">Repeat Password</label>
                    <input type="password" name="pwd-repeat" placeholder="Repeat Password" class="form-control">
                </div>
                <button type="submit" class="btn btn-success" name="signup-submit">Signup</button>
            </form>
        </div>
    </main>

<?php
    require 'footer.php';
?>