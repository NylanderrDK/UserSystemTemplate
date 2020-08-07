<?php
    require 'header.php';
?>

    <main>
        <div class="container">
            <?php
                if(isset($_GET['loggedOut'])) {
                    echo '<div class="alert alert-success mt-3"> You have logged out! </div>';
                }

                if(isset($_GET['login'])) {
                    if($_GET['login'] == "success") {
                        echo '<div class="alert alert-success mt-3"> You are logged in! </div>';
                    }
                }

                if(isset($_GET['error'])) {
                    if($_GET['error'] == "notLoggedIn") {
                        echo '<div class="alert alert-danger mt-3" role="alert"> You need to be logged in to access the profile page! </div>';
                    }
                }
            ?>
        </div>
    </main>

<?php
    require 'footer.php';
?>