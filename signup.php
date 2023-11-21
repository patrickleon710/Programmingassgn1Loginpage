<?php
include_once 'header.php'
?>

<section class="signup-form">
    <h2>Sign Up</h2>
    <form action="./includes/signup.inc.php" method="post">
        <div class="form">
            <input type="text" name="name" placeholder="Full name...">
            <input type="text" name="email" placeholder="Email...">
            <input type="text" name="uid" placeholder="Username...">
            <input type="password" name="pwd" placeholder="Password...">
            <input type="password" name="pwdRepeat" placeholder="Repeat password...">

            <p>Already have an account? <a href="login.php" class="login-link">Login</a></p>

            <button type="submit" name="submit">Sign Up</button>
        </div>
        <?php
        if (isset($_GET["error"])) {
            if ($_GET["error"] == "emptyinput") {
                echo "<p>Please fill in all fields</p>";
            } else if ($_GET["error"] == "invaliduid") {
                echo "<p>Please select another username</p>";
            } else if ($_GET["error"] == "invalidemail") {
                echo "<p>Please select another email</p>";
            } else if ($_GET["error"] == "passwordsdontmatch") {
                echo "<p>Passwords do not match</p>";
            } else if ($_GET["error"] == "usernamealreadyinuse") {
                echo "<p>Username already in use</p>";
            } else if ($_GET["error"] == "stmtfailed") {
                echo "<p>Something went wrong, try again!</p>";
            } else if ($_GET["error"] == "none") {
                echo "<p>You are signed up!</p>";
            }
        }
        ?>
    </form>


</section>



<?php
include_once 'footer.php'
?>