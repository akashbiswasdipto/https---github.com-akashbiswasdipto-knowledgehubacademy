<?php
require_once('admin_header.php');
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel='stylesheet' href='css/home.css'>
    <title>Admin- KnowledgeHub Academy</title>
</head>
<body onload="startTime()">
    <div class='home_room'>
        <h2>Hello <?php echo $_SESSION['login']['fullname'];?></h2>
        <div id="txt" class="txt"></div>
        <br>
        <h5>Your classes for today</h5>
    </div>
    <script src="jscript/time.js"></script>

</body>
</html>