<?php
require_once('../controller/database.php');
session_start();
if($_SESSION['login']['username']!=''){
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/admin_header.css">
</head>
<body>
    <div class='header'>
        <div class='content_left'>
            <img src='../images/logo.webp.png' class='header_logo'>
        </div> 
        <div class='content_middle'>
            <a href='home.php'>Home</a>
            <a href='student.php'>Student List</a>
            <a href='register.php'>Student Register</a>
            <a href='fees.php'>Tution Fees</a>
            <a href='notice.php'>Teachers List</a>
            <a href='notice.php'>Notice</a>
            
        </div>
        <div class='content_right'>
            <a href='../index.php'>Web Page</a>
            <a href='logout.php'>Logout</a>
        </div>
    </div>
</body>
</html>


<?php
}

else{
    session_destroy();
    header('location: ../login.php');
}
?>