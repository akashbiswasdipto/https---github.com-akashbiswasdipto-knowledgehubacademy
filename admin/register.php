<?php
require_once('admin_header.php');
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel='stylesheet' href='css/register.css'>
    <title>Student Register- KnowledgeHub Academy</title>
</head>
<body>
    <div class='student_register'>
        <h1>Student Registration Form</h1>
        <form action="controller/function.php?register" method="post">
        <input type='text' placeholder="Enter Student Name" name='sname' class='srinput' required><br>
        <input type='date' name='sdob' class='srinput' required><br>
        <input type='text' placeholder="Student Contact Number" name='scon' class='srinput' required><br>
        <input type='email' placeholder="Enter Student email" name='semail' class='srinput' required><br>
        <input type='text' placeholder="Enter Emergency Contact Name" name='ename' class='srinput' required><br>
        <input type='text' placeholder="Enter Emergency Contact Number" name='enum' class='srinput' required><br>
        <select name='subject' id='sub' class='srinput' required>
                <option value='OlAlchemist'>O Level Alchemist</option>
                <option value='AlPhoenix'>A Level Phoenix</option>
                <option value='Grade 8'>Grade 8</option>
                <option value='Grade 9'>Grade 9</option>
                <option value='OMJLevel25'>O Level 2025 May/Jun</option>
                <option value='OONLevel25'>O Level 2025 Oct/Nov</option>
                <option value='OMJLevel26'>O Level 2026 May/Jun</option>
                <option value='OONLevel26'>O Level 2026 Oct/Nov</option>
                <option value='AMJLevel25'>A Level 2025 May/Jun</option>
                <option value='AONLevel25'>A Level 2025 Oct/Nov</option>
                <option value='AMJLevel26'>A Level 2026 May/Jun</option>
                <option value='AONLevel26'>A Level 2026 Oct/Nov</option>
        </select><br>
        <input type='number' placeholder="Total Number of subjects registered" name='scourse' class='srinput' required><br>
        <button type='submit' name='submit' class="submit">Register</button>
        </form>
        <h5> <?php if(isset($_GET['success'])){
            echo " The Student has been successfully registered. The ID is ".$_GET['success']."";
        }
        elseif(isset($_GET['failed'])){
            echo "There has been an error with the registration, please try again";
        }
        ?></h5>
    </div>
</body>
</html>