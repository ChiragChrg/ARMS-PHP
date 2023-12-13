<?php 
    session_start();
    $LogUser = $_SESSION['User'];
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>ARMS Login</title>
    <link rel="stylesheet" media="(min-width:451px)" href="../css/login.css">
    <link rel="stylesheet" media="(max-width:450px)" href="../css/Mobile/login.css">
    <link rel="shortcut icon" href="../assets/favicon.svg" type="image/x-icon">
    <link
      rel="stylesheet"
      href="https://fonts.googleapis.com/css?family=Quicksand&amp;display=swap"
    />
    <script src="../js/icon.js" crossorigin="anonymous"></script>
    <script src="../js/index.js"></script>
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
                    <a href="../index.php">User</a>
                    <a href="../about.php">About</a>
                    <a href="../contact.php">Contact</a>
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
      <div class="lost">
          <div class="goback">
              <h2>Are you Lost ?</h2>
              <a href="../index.php">Go Back</a>
          </div>
          <img src="../assets/404.png" alt="404">
      </div>
    </div>

    <footer>
      <p>&#169; Copyright 2021 ChiragChrg</p>
    </footer>
    <script src="../js/nav.js"></script>
</body>
</html>