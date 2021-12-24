<?php
    include('../../login/connect.php');

    //Info sent from the Upload.js
    $fileId = $_GET['FID'];
    $fileUrl = $_GET['Url'];
    $fileName = $_GET['Name'];
    $fileSubject = $_GET['Subject'];

    //Converting the file size to KB
    $fileSizeBytes = ($_GET['Size']/1024);
    $fileSizeNum = round($fileSizeBytes,0);

    //Converting the file size to MB if KB > 1000
    if($fileSizeNum >= 1000){
      $fileSize = round($fileSizeBytes/1024,2)." MB";
    }
    else{
      $fileSize = $fileSizeNum." KB";
    }

    $create = "create table if not exists docs(
        id varchar(100) not null primary key,
        url varchar(100) not null,
        name varchar(100) not null,
        size varchar(100) not null,
        subject varchar(20) not null);";
    $res = mysqli_query($con,$create);

    $insert = "insert into docs values('$fileId','$fileUrl','$fileName','$fileSize','$fileSubject');";
    $result = mysqli_query($con,$insert);

    session_start();
    if($result){
      $_SESSION['UploadStatus'] = "Success";
        header('Location: ./upload/index.php');
        // header('Location: ./upload/index.php?User=Teacher&Upload=Success');
    }
    else{
      $_SESSION['UploadStatus'] = "Error";
        header('Location: ./upload/index.php?');
        // header('Location: ./upload/index.php?User=Teacher&Upload=Error');
    }
?>