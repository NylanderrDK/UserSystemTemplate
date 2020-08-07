<?php
    require 'header.php';
?>

    <main>
        <div class="container">
            <?php
                if(!isset($_SESSION['userID'])) {
                    header("Location: index.php?error=notLoggedIn");
                    exit();
                }
            ?>
            <div class="row text-center mt-3">
                <div class="col-sm-5">
                    <div class="card bg-light mb-3">
                        <div class="card-header">Profile Information</div>
                        <div class="card-body">
                            <h5 class="card-title">Username</h5>
                            <p class="card-text"><?php echo $_SESSION['userUID']; ?></p>
                        </div>
                    </div>
                </div>
                <div class="col-sm-2">
                    <div class="card bg-light mb-3">
                        <div class="card-header">Profile Info</div>
                        <div class="card-body">
                            <h5 class="card-title">ID</h5>
                            <p class="card-text"><?php echo $_SESSION['userID']; ?></p>
                        </div>
                    </div>
                </div>
                <div class="col-sm-5">
                    <div class="card bg-light mb-3">
                        <div class="card-header">Profile Information</div>
                        <div class="card-body">
                            <h5 class="card-title">E-Mail</h5>
                            <p class="card-text"><?php echo $_SESSION['userMail']; ?></p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </main>

<?php
    require 'footer.php';
?>