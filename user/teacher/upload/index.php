<?php
  session_start();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Upload Docs</title>
    <link rel="stylesheet" href="../../../css/fileUp.css">
    <link rel="shortcut icon" href="../../../css/favicon.svg" type="image/x-icon">

    <link
      rel="stylesheet"
      href="https://fonts.googleapis.com/css?family=Quicksand&amp;display=swap"
    />
    <script src="../../../js/icon.js" crossorigin="anonymous"></script>
    <script src="//static.filestackapi.com/filestack-js/3.x.x/filestack.min.js"></script>
    <script src="../../../js/upload.js"></script>
  </head>
<body>
    <header>
        <div class="header">
          <a href="https://sims-arms.000webhostapp.com/">
            <div class="logo">
              <i class="fad fa-user-graduate fa-3x"></i>
              <p>&nbsp;ARMS</p>
            </div>
          </a>
        
          <div class="nav">
              <ul>
                <li>
                  <a href="../index.php">Home</a>
                  <a href="../../../about.php">About</a>
                  <a href="../../../login/logout.php">Logout</a>
                </li>
              </ul>
          </div>
        </div>
    </header>

    <div class="signupAlert" style="margin-top: 2%;">
      <div class="alert">
        Alert Message
      </div>
    </div>

    <div class="info">
      <h2>Upload PDF Files</h2>
      <p>Kindly select the respective subject of the file which is to  be Uploaded</p>
    </div>

    <script>
      // Custom variables used as Parameters for Upload function to know which subject file is Uploaded
      var LAMP = "LAMP";
      var JAVA = "Ad.JAVA";
      var SE = "SE";
      var CC = "CC";
      var WCN = "WCN";
      var CNS = "CNS";
    </script>

    <div class="container">

        <div class="upbtn">
          <p>LAMP Files Upload</p>
          <div class="btn">
            <a href="../../student/download/lamp.php" title="Show Uploaded Files"><i class="fas fa-folder fa-2x"></i></a>
            <input type="button" value="Upload LAMP" onclick="uploadFile(LAMP)">
          </div>
        </div>

        <div class="upbtn">
          <p>Ad.JAVA Files Upload</p>
          <div class="btn">
            <a href="../../student/download/java.php" title="Show Uploaded Files"><i class="fas fa-folder fa-2x"></i></a>
            <input type="button" value="Upload JAVA" onclick="uploadFile(JAVA)">
          </div>
        </div>

        <div class="upbtn">
          <p>SE Files Upload</p>
          <div class="btn">
           <a href="../../student/download/se.php" title="Show Uploaded Files"> <i class="fas fa-folder fa-2x"></i></a>
            <input type="button" value="Upload SE" onclick="uploadFile(SE)">
          </div>
        </div>

        <div class="upbtn">
          <p>CC Files Upload</p>
          <div class="btn">
            <a href="../../student/download/cc.php" title="Show Uploaded Files"><i class="fas fa-folder fa-2x"></i></a>
            <input type="button" value="Upload CC" onclick="uploadFile(CC)">
          </div>
        </div>

        <div class="upbtn">
          <p>WCN Files Upload</p>
          <div class="btn">
            <a href="../../student/download/wcn.php" title="Show Uploaded Files"><i class="fas fa-folder fa-2x"></i></a>
            <input type="button" value="Upload WCN" onclick="uploadFile(WCN)">
          </div>
        </div>

        <div class="upbtn">
          <p>CNS Files Upload</p>
          <div class="btn">
            <a href="../../student/download/cns.php" title="Show Uploaded Files"><i class="fas fa-folder fa-2x"></i></a>
            <input type="button" value="Upload CNS" onclick="uploadFile(CNS)">
          </div>
        </div>
      </div>

    <footer>
      <p>&#169; Copyright 2021 ChiragChrg</p>
    </footer>

    <?php 
      //Check if upload is successful
      if(isset($_SESSION['UploadStatus'])){
        $UploadStatus = $_SESSION['UploadStatus'];
        if($UploadStatus == 'Success'){
          echo "<script>
              var upStat = '$UploadStatus';
              uploadStatus(upStat);
            </script>";
        }
        else if($UploadStatus == 'Error'){
          echo "<script>
              var upStat = '$UploadStatus';
              uploadStatus(upStat);
            </script>";
        }
      }
    ?>

    <!-- <script src="../dbUpload.php"></script> -->
</body>
</html>