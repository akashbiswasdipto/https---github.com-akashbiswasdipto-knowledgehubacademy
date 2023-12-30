<?php
require('home_header.php');
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel='stylesheet' href='css/enrollment.css'>
    <title>Enrollment- KnowledgeHub Academy</title>
</head>
<body>
    <div class='admission'>
        <h1>Student Admission</h1>
        <form action="controller/function.php?enroll" method="post" >
            <input type='text' placeholder="Student Name" class='admit_input' name='sname' required><br>
            <input type='email' placeholder="Student Email" class='admit_input' name='semail' required><br>
            <input type='text' placeholder="Student Contact Number" class='admit_input' name='scon' required><br>
            <input type='text' placeholder="Parents Name" class='admit_input' name='spname' required><br>
            <input type='text' placeholder="Parents Contact Number" class='admit_input' name='spnum' required><br>
            <select name='subject' id='sub' class='admit_input' required>
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
            <button type='submit' name='submit' class="submit">Enroll</button>
        </form>
            <?php
                if(isset($_GET['success'])){
                    ?> <h5>You have successfully enrolled. We will contact you shortly.</h5>
                    <?php
                }
                elseif(isset($_GET['failed'])){
                    ?>  <h5>There has been an error, please try again or contact us at +8801744327523</h5>
                    <?php
                }
            ?>
    </div>
</body>
</html>