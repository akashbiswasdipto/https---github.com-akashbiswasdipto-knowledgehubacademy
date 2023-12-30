<?php
require_once('database.php');


if(isset($_GET['register'])){
    if(isset($_POST['submit'])){
        $details=array("sname"=>$_POST['sname'],"sdob"=>$_POST['sdob'], "semail"=>$_POST['semail'], "scon"=>$_POST['scon'],
        "ename"=>$_POST['ename'],"enum"=>$_POST['enum'],"ssub"=>$_POST['subject'],"scourse"=>$_POST['scourse']);
        enroll($details,$conn);
    }
}

function enroll($sdetails,$conn){
    $sname=$sdetails['sname'];
    $sdob=$sdetails['sdob'];
    $semail=$sdetails['semail'];
    $scon=$sdetails['scon'];
    $spname=$sdetails['ename'];
    $spnum=$sdetails['enum'];
    $subject=$sdetails['ssub'];
    $course=$sdetails['scourse'];
    $search="SELECT * FROM studentregister";
    $result=mysqli_query($conn, $search);
    $row_cnt = mysqli_num_rows($result);
    $id="KHA00".$row_cnt+1;
    $query="INSERT INTO studentregister (sid, sname, sdob, scon, semail, ename, enum, course, ncourse) VALUES ('$id','$sname','$sdob','$scon','$semail','$spname','$spnum','$subject','$course')";
    
    if (mysqli_query($conn, $query)){
        header('location:../register.php?success='.$id);
    }
    else{
        header('location:../register.php?failed');
    }
}

if(isset($_GET['feescheck'])){
    if(isset($_POST['submit'])){
     $id=$_POST['sid'];
     generatefees($id, $conn);
    }
}

function generatefees($id,$conn){

}

if(isset($_GET['noticeupload'])){
    if(isset($_POST['submit'])){
        $target_dir = "../notice/";
        $target_file = $target_dir . basename($_FILES["nfile"]["name"]);
        echo $target_file;
        if(move_uploaded_file($_FILES["nfile"]["tmp_name"], $target_file)){
        $noticeupload=array("ntitle"=>$_POST['ntitle'],"ndesc"=>$_POST['ndesc'],"nfile"=>$target_file);
        noticeupload($noticeupload, $conn);   
        }
        else{
            header('location:../notice.php?failed');
        }
    }
}

function noticeupload($noticeupload, $conn){
    $ntitle=$noticeupload['ntitle'];
    $ndesc=$noticeupload['ndesc'];
    $nfile=$noticeupload['nfile'];
    $query="INSERT INTO notice (ntitle,ndesc,nfile) VALUES ('$ntitle','$ndesc','$nfile')";
    if (mysqli_query($conn, $query)){
        header('location:../notice.php?success');
    }
    else{
        header('location:../notice.php?failed');
    }
}






?>