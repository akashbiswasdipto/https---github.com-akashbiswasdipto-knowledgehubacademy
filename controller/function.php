<?php
require_once('database.php');


if(isset($_GET['enroll'])){
    if(isset($_POST['submit'])){
        $details=array("sname"=>$_POST['sname'], "semail"=>$_POST['semail'], "scon"=>$_POST['scon'],"spname"=>$_POST['spname'],"spnum"=>$_POST['spnum'],"ssub"=>$_POST['subject']);
        enroll($details,$conn);
    }
}

function enroll($sdetails,$conn){
    $sname=$sdetails['sname'];
    $semail=$sdetails['semail'];
    $scon=$sdetails['scon'];
    $spname=$sdetails['spname'];
    $spnum=$sdetails['spnum'];
    $subject=$sdetails['ssub'];
    $query="INSERT INTO studentenrollment (sname, semail, scon, spname, spnum, course) VALUES ('$sname','$semail','$scon','$spname','$spnum','$subject')";
    if (mysqli_query($conn, $query)){
        header('location:../enrollment.php?success');
    }
    else{
        header('location:../enrollment.php?failed');
    }
}

if(isset($_GET['login'])){
    if(isset($_POST['submit'])){
        $details=array("username"=>$_POST['username'],"userpass"=>$_POST['userpass']);
        login($details,$conn);
    }
}

function login($udetails,$conn){
    $username=$udetails['username'];
    $userpass=$udetails['userpass'];
    $error=1;
    $query="SELECT * FROM adminusers where username='$username'";
    $result = mysqli_query($conn, $query);
    if (mysqli_num_rows($result) > 0){
        $row = mysqli_fetch_assoc($result);
        if($userpass==$row['userpass']){
            $error=0;
            session_start();
            $_SESSION['login']=array("username"=>$username,"password"=>$userpass, "fullname"=>$row['Fullname']);
            header('location: ../admin/home.php');
        }
    }

    if(mysqli_num_rows($result)==0 || $error==1){
        header('location: ../login.php?error');
    }

}