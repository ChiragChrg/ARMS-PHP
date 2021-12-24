<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Download Docs</title>
    <link rel="shortcut icon" href="../../../css/favicon.svg" type="image/x-icon">
    <link
      rel="stylesheet"
      href="https://fonts.googleapis.com/css?family=Quicksand&amp;display=swap"
    />
    <script src="../../../js/icon.js" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="../../../css/fileDown.css">
    <!-- <script src="//static.filestackapi.com/filestack-js/3.x.x/filestack.min.js"></script> -->

</head>
<body>
  <?php
      include('../../../login/connect.php');
    ?>
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

    <div class="signupAlert">
      <div class="alert">
        Alert Message
      </div>
    </div>

    <div class="container">
      <div class="head">
          <div class="title">
              <h2>LAMP</h2>
              <p>Linux Apache MySQL PHP</p>
          </div>
          <p>Faculty - Harshitha K</p>
      </div>

      <div class="files">
          <h2>LAMP Files Download</h2>
              
            <?php 
              $sql = "select * from docs where subject = 'LAMP';";
              $res = mysqli_query($con,$sql);
              while($row = mysqli_fetch_assoc($res)){
              //This part of HTML is looping within PHP While loop
            ?>
            <div class="row">
              <div class="col"><?php echo $row['name']; ?></div>
              <div class="col"><?php echo $row['size']; ?></div>
              <a class="col downbtn" href="<?php echo $row['url']?>">
                  <i class="fad fa-cloud-download-alt"></i>&nbsp; Download
              </a>
            </div>

            <?php
              }
            ?>
        </div>
    </div>

    <footer>
      <p>&#169; Copyright 2021 ChiragChrg</p>
    </footer>

    <!-- <script src="../../../js/file.js"></script> -->
    <!-- <script src="../../../js/upload.js"></script> -->
</body>
</html>