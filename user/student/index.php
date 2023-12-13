<?php
    session_start();
    $Username = $_SESSION['name'];
    $RegNo = $_SESSION['regno'];
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Welcome Student</title>
    <link rel="stylesheet" media="(min-width:451px)" href="../../css/index.css">
    <link rel="stylesheet" media="(max-width:450px)" href="../../css/Mobile/index.css">
    <link rel="shortcut icon" href="../../assets/favicon.svg" type="image/x-icon">
    <link
      rel="stylesheet"
      href="https://fonts.googleapis.com/css?family=Quicksand&amp;display=swap"
    />
    <script src="../../js/icon.js" crossorigin="anonymous"></script>
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
                  <a class="active" href="./index.php">Home</a>
                  <a href="../../about.php">About</a>
                  <a href="../../login/logout.php">Logout</a>
                </li>
              </ul>
          </div>
        </div>
    </header>

    <div class="container" style="height: 60vh;">
      <?php
        echo "<p>Welcome, ".$Username."</p>";
        echo "<p>Your Reg No is ".$RegNo."</p>";
      ?>

      <a class="downdfilebtn" href="./download/index.php">Downlaod Files</a>
    </div>

    <footer>
      <p>&#169; Copyright 2021 ChiragChrg</p>
    </footer>

    <script src="../../js/nav.js"></script>
</body>
</html>