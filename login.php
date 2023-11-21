<?php 
    include_once 'header.php'
?>

        <section class="signup-form">
            <h2>Log in</h2>
            <form action="includes/login.inc.php" method="post">
                <div class="form">
                    
                    <input type="text" name="uid" placeholder="Username/Email...">
                    
                    <input type="password" name="pwd" placeholder="Password...">

                    <p>Don't have an account? <a class="login-link" href="signup.php">Sign up</a></p>
                    
                    <button type="submit" name="submit">Login</button>
                </div>
            </form>
            <?php
            if (isset($_GET["error"])) {
                if ($_GET["error"] == "emptyinput") {
                    echo "<p>Please fill in all fields</p>";
                }
                else if ($_GET["error"] == "incorrectdetails") {
                    echo "<p>Please enter correct login information</p>";
                }
                else if ($_GET["error"] == "incorrectpassword") {
                    echo "<p>Wrong password</p>";
                }
                
            }
        ?>

        </section>
    
<?php 
    include_once 'footer.php'
?>