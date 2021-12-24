<?php
    session_start();
?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Welcome Teacher</title>
    <link rel="stylesheet" href="../../css/index.css">
    <link rel="shortcut icon" href="../../css/favicon.svg" type="image/x-icon">

    <link
      rel="stylesheet"
      href="https://fonts.googleapis.com/css?family=Quicksand&amp;display=swap"
    />
    <script src="../../js/icon.js" crossorigin="anonymous"></script>
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
                  <a class="active" href="./index.php">Home</a>
                  <a href="../../contact.php">About</a>
                  <a href="../../login/logout.php">Logout</a>
                </li>
              </ul>
          </div>
        </div>
    </header>



    <div class="container" style="height: 60vh;">
    <?php
    // session_start();
    echo "<p>Welcome, ".$_SESSION['name']."</p>";
    ?>

    <a href="./upload/index.php">Upload Files</a>
    </div>

    <footer>
      <p>&#169; Copyright 2021 ChiragChrg</p>
    </footer>
  </body>
</html>