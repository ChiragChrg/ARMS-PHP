<?php
    include('../../login/connect.php');

    $fileId = $_GET['FID'];
    $fileUrl = $_GET['Url'];
    $fileName = $_GET['Name'];
    $fileSizeBytes = ($_GET['Size']/1024);
    $fileSizeNum = round($fileSizeBytes,0);
    $fileSubject = $_GET['Subject'];

    if($fileSizeNum >= 1000){
      $fileSize = round($fileSizeBytes/1024,2)." MB";
    }
    else{
      $fileSize = $fileSizeNum." KB";
    }
    // echo $fileId."<br>";
    // echo $fileUrl."<br>";
    // echo $fileName."<br>";
    // echo $fileSize."<br>";
    // echo $fileSubject."<br>";

    $create = "create table if not exists docs(
        id varchar(100) not null primary key,
        url varchar(100) not null,
        name varchar(100) not null,
        size varchar(100) not null,
        subject varchar(20) not null);";
    $res = mysqli_query($con,$create);

    $insert = "insert into docs values('$fileId','$fileUrl','$fileName','$fileSize','$fileSubject');";
    $result = mysqli_query($con,$insert);

    if($result){
        header('Location: ./upload/index.php?User=Teacher&Upload=Success');
    }
    else{
        header('Location: ./upload/index.php?User=Teacher&Upload=Error');
    }
?>