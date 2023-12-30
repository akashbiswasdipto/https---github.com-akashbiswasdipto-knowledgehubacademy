<?php
require('home_header.php');
require_once('controller/database.php');

$query= 'SELECT * FROM notice ORDER BY sl DESC';
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
    <div class='notice_list'>
            <?php
            if($result->num_rows>0){
              while($row =$result->fetch_assoc()){
                ?>
                <div class='print_notice'>
                    <p><?php echo $row['date'];?></p>
                    <img src='<?php echo "admin/notice/".$row['nfile'];?>' class='notice_image'>
                    <h1><?php echo $row['ntitle'];?></h1>
                    <h5><?php echo $row['ndesc'];?></h5>
                    
                </div>
                <?php
              }
            }
            else{
              echo "<h5>0 Records</h5>";
            }
            ?>
           </table>

    </div>
  </div>
</body>
</html>