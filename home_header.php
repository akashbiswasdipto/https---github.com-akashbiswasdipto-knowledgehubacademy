<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/home_header.css">
</head>
<body>
    <div class='header'>
        <div class='content_left'>
            <img src='images/logo.webp.png' class='header_logo'>
        </div> 
        <div class='content_middle'>
            <a href='index.php'>Home</a>
            <a href='courses.php'>Courses</a>
            <a href='Teachers.php'>Teachers</a>
            <a href='Contact.php'>Contact Us</a>
            <a href='notice.php'>Notice</a>
            <a href='faq.php'>FAQ</a>
        </div>
        <div class='content_right'>
            <?php session_start();
            if(isset($_SESSION['login']['username'])){
                    if($_SESSION['login']['username']!=''){
                echo "<a href='admin/home.php'>Admin Panel</a>";    
                echo "<a href='admin/logout.php'>Logout</a>";
                }
            }
            else{
               echo "<a href='login.php'>Login</a>";
            }
            ?>
            
        </div>
    </div>
</body>
</html>