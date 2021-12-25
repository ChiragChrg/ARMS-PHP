<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Download Docs</title>
    <link rel="shortcut icon" href="../../../assets/favicon.svg" type="image/x-icon">
    <link
      rel="stylesheet"
      href="https://fonts.googleapis.com/css?family=Quicksand&amp;display=swap"
    />
    <script src="../../../js/icon.js" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="../../../css/file.css">
    <script src="//static.filestackapi.com/filestack-js/3.x.x/filestack.min.js"></script>

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
      <a href="./lamp.php">
        <div class="subject">
          <i class="fas fa-folder fa-5x"></i>
          <p>Linux Apache MySQL PHP</p>
        </div>
      </a>

      <a href="./java.php">
        <div class="subject">
          <i class="fas fa-folder fa-5x"></i>
          <p>Advanced JAVA</p>
        </div>
      </a>

      <a href="./se.php">
        <div class="subject">
        <i class="fas fa-folder fa-5x"></i>
        <p>Software Engineering</p>
      </div>
      </a>

      <a href="./cc.php">
        <div class="subject">
          <i class="fas fa-folder fa-5x"></i>
          <p>Cloud Computing</p>
        </div>
      </a>

     <a href="./wcn.php">
        <div class="subject">
          <i class="fas fa-folder fa-5x"></i>
          <p>Wireless Communication Network</p>
        </div>
     </a>

      <a href="./cns.php">
        <div class="subject">
          <i class="fas fa-folder fa-5x"></i>
          <p>Cloud Network Security</p>
        </div>
      </a>
    </div>

    <footer>
      <p>&#169; Copyright 2021 ChiragChrg</p>
    </footer>

    <!-- <script src="../../../js/file.js"></script> -->
    <!-- <script src="../../../js/upload.js"></script> -->
</body>
</html>