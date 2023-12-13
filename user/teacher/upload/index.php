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
    <link rel="stylesheet" media="(min-width:451px)" href="../../../css/fileUp.css">
    <link rel="stylesheet" media="(max-width:450px)" href="../../../css/Mobile/fileUp.css">
    <link rel="shortcut icon" href="../../../assets/favicon.svg" type="image/x-icon">

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
          <a href="http://arms-v1.infinityfreeapp.com/">
            <div class="logo">
              <i class="fad fa-user-graduate fa-3x"></i>
              <p>&nbsp;ARMS</p>
            </div>
          </a>

          <a href="javascript:void(0)" class="openbtn" onclick="openMenu()">
            <i class="fad fa-bars fa-2x"></i>
          </a>
        
          <div class="nav">
              <ul>
                <li>
                  <i class="closebtn fad fa-times-circle fa-2x" onclick="closeMenu()"></i>
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

        <div class="upfile">
          <p>LAMP Files Upload</p>
          <div class="btn">
            <a href="../../student/download/lamp.php" title="Show Uploaded Files"><i class="fas fa-folder fa-2x"></i></a>
            <div class="upbtn" onclick="uploadFile(LAMP)">
              <i class="fad fa-cloud-upload-alt"></i> 
              <p>&nbsp; Upload</p>
            </div>
          </div>
        </div>

        <div class="upfile">
          <p>Ad.JAVA Files Upload</p>
          <div class="btn">
            <a href="../../student/download/java.php" title="Show Uploaded Files"><i class="fas fa-folder fa-2x"></i></a>
            <div class="upbtn" onclick="uploadFile(JAVA)">
              <i class="fad fa-cloud-upload-alt"></i> 
              <p>&nbsp; Upload</p>
            </div>
          </div>
        </div>

        <div class="upfile">
          <p>SE Files Upload</p>
          <div class="btn">
           <a href="../../student/download/se.php" title="Show Uploaded Files"> <i class="fas fa-folder fa-2x"></i></a>
           <div class="upbtn" onclick="uploadFile(SE)">
              <i class="fad fa-cloud-upload-alt"></i> 
              <p>&nbsp; Upload</p>
            </div>
          </div>
        </div>

        <div class="upfile">
          <p>CC Files Upload</p>
          <div class="btn">
            <a href="../../student/download/cc.php" title="Show Uploaded Files"><i class="fas fa-folder fa-2x"></i></a>
            <div class="upbtn" onclick="uploadFile(CC)">
              <i class="fad fa-cloud-upload-alt"></i> 
              <p>&nbsp; Upload</p>
            </div>
          </div>
        </div>

        <div class="upfile">
          <p>WCN Files Upload</p>
          <div class="btn">
            <a href="../../student/download/wcn.php" title="Show Uploaded Files"><i class="fas fa-folder fa-2x"></i></a>
            <div class="upbtn" onclick="uploadFile(WCN)">
              <i class="fad fa-cloud-upload-alt"></i> 
              <p>&nbsp; Upload</p>
            </div>
          </div>
        </div>

        <div class="upfile">
          <p>CNS Files Upload</p>
          <div class="btn">
            <a href="../../student/download/cns.php" title="Show Uploaded Files"><i class="fas fa-folder fa-2x"></i></a>
            <div class="upbtn" onclick="uploadFile(CNS)">
              <i class="fad fa-cloud-upload-alt"></i> 
              <p>&nbsp; Upload</p>
            </div>
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

    <script src="../../../js/nav.js"></script>
</body>
</html>