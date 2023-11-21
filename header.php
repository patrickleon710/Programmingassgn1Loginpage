<?php

    session_start();
    
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>mywork</title>
    <link rel="stylesheet" href="./style.css">
</head>
<body>
    <nav>
        <div class="wrapper">
            <a href="index.php"></a>
            <ul class="header-links">
                
                <?php
                    if (isset($_SESSION["useruid"])) {
                        echo "
                        <li class='header-link'><a href='index.php'>Home</a></li>
                        ";
                        
                        echo "
                        <li class='header-link'><a href='about.php'>About us</a></li>
                        ";
                        
                        echo "
                        <li class='header-link'><a href='profile.php'>Profile</a></li>
                        ";
                        echo ";
                        <li class='header-link'><a href='recipe.php'>Recipe</a></li>
                        ";
                        echo "
                        <li class='header-link'><a href='includes/logout.inc.php'>Log out</a></li>
                        ";
                        
                    }
                    else {
                        echo "
                        <li class='header-link'><a href='signup.php'>Sign up</a></li>
                        ";
                        echo "
                        <li class='header-link'><a href='login.php'>Log in</a></li>
                        ";
                    }
                ?>
                
            </ul>
        </div>
    </nav>

    <div class="wrapper">