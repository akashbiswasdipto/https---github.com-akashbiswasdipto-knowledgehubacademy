<?php
require('admin_header.php');
require_once('controller/database.php');

$query= 'SELECT * FROM notice ORDER BY sl DESC LIMIT 5';
$result=mysqli_query($conn, $query);
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel='stylesheet' href='css/notice.css'>
    <title>Notice- KnowledgeHub Academy</title>
</head>
<body>
  <div class='notice_box'>
    <h1>Notice Board</h1>
    <div class='notice_upload'>
      <h1>Notice Upload</h1>
      <form action='controller/function.php?noticeupload' method="post" enctype="multipart/form-data">
      <input type='text' placeholder="Enter Notice Title" class='notice_input' name='ntitle' required><br>
      <input type='text' placeholder="Enter Notice Description" class='notice_inputl' name='ndesc' required><br>
      <input type='file' class='notice_input' name='nfile' style='border: 2px solid black; background-color:black; color:white; border-radius: 3px; text-align:center;' required><br>
      <button type='submit' class='submit' name='submit' >Upload</button>
      <h5><?php
        if(isset($_GET['success'])){
          echo "Notice Uploaded Successfully";
        }
        elseif(isset($_GET['failed'])){
          echo "Something went wrong, please upload the notice again";
        }
      ?>
      </h5>
      </form>
    </div>
    <div class='notice_list'>
      <h1>Notice List</h1>
        <div class='print_notice'>
          
            <table><tr><th>Sl</th><th>Title</th><th>Description</th><th>Date</th> </tr>
            <?php
            if($result->num_rows>0){
              while($row =$result->fetch_assoc()){
                echo "<tr><td>".$row['sl']."</td><td>".$row['ntitle']."</td><td>".$row['ndesc']."</td><td>".$row['date']."</td></tr>";
              }
            }
            else{
              echo "<h5>0 Records</h5>";
            }
            ?>
           </table>
            
          
        </div>
    </div>
  </div>
</body>
</html>