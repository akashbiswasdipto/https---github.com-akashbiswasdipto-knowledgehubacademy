<?php
require('home_header.php');
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel='stylesheet' href='css/login.css'>
    <title>Login- KnowledgeHub Academy</title>
</head>
<body>
    <div class='login'>
        <img src='images/icon.png' class='login_logo'>
        <form action="controller/function.php?login" method="post">
            <input type='text' name='username' class='input' placeholder="Enter Username" required>
            <input type='password' name='userpass' class='input' placeholder="Enter User password" required><br>
            <button type='submit' name='submit' class='submit'>Login</button>
        </form>
        <?php
            if(isset($_GET['error'])){
                echo "<br> User cannot be found. Please try again with correct details.";
            }
        ?>
    </div>
</body>
</html>