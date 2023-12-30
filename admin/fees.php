<?php
require_once('admin_header.php');
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel='stylesheet' href='css/fees.css'>
    <title>Tution Fees- KnowledgeHub Academy</title>
</head>
<body>
    <div class='box'>
        <div class='fees_check'>
            <h1>Student Balance</h1>
            <form action="controller/function.php?feescheck" method="post">
                <input type='text' name='sid' placeholder="Enter Student ID" class='feesinput' required>
                <button type='submit' name='submit' class='submit'>Check Balance</button>
            </form>
            
        </div>
        <div class='fees'>
            <h1>Tuition Fees</h1>
            <form action='controller/function.php?payfees' method='post'>
                <h5>Student ID: <input type='text' name='sid' placeholder="Enter Student ID" class='feesinput' required></h5>
                <h5>Payment Date: <input type='date' name='sdate' class='feesinput' required></h5>
                <h5>Payment For the Month: <select name='smonth' id='sub' class='feesinput' required>
                    <option value='January'>January</option>
                    <option value='February'>February</option>
                    <option value='March'>March</option>
                    <option value='April'>April</option>
                    <option value='May'>May</option>
                    <option value='June'>June</option>
                    <option value='July'>July</option>
                    <option value='August'>August</option>
                    <option value='September'>September</option>
                    <option value='October'>October</option>
                    <option value='November'>November</option>
                    <option value='December'>December</option>
                </select></h5>
                <h5>Payment Method: <select name='smethod' id='sub' class='feesinput' required>
                    <option value='Cash'>Cash</option>
                    <option value='Bkash'>Bkash</option>
                </select></h5>
                <h5>Amount Paid: <input type='text' name='samount' class='feesinput' placeholder="Enter Total Amount"  required></h5>
                <button type='submit' name='submit' class='submit'>Pay</button>
            </form>
        </div>
    </div>

</body>
</html>