<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Welcome to ARMS</title>
    <link rel="stylesheet" href="./css/index.css">
    <link rel="shortcut icon" href="./css/favicon.svg" type="image/x-icon">
    <link
        rel="stylesheet"
        href="https://fonts.googleapis.com/css?family=Quicksand&amp;display=swap"
      />
    <script src="./js/icon.js" crossorigin="anonymous"></script>
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
              <!-- <a class="active" href="#">Home</a> -->
              <a href="./about.php">About</a>
              <a href="./contact.php">Contact</a>
            </li>
          </ul>
        </div>
      </div>
    </header>

    <div class="intro">
        <pre>
          <h2>Welcome to</h2>
          <h1>Academic Resource Management System</h1>
          <h2>By SIMS CCIS</h2>
        </pre>
    </div>

    <!-- <div class="signupAlert">
      <div class="alert">
        Alert Message
      </div>
    </div>  -->

    <div class="container">
      <!-- Teacher Login Form -->
      <a href="./login/connect.php?User=Teacher" class="card TeacherCard">
          <div class="logoT">
            <i class="fad fa-chalkboard-teacher fa-5x"></i>
            <h3>Teacher</h3>
          </div>
      </a>

      <!-- Student Login Form -->
      <a href="./login/connect.php?User=Student" class="card StudentCard">
          <div class="logoS">
            <i class="fad fa-users-class fa-5x"></i>
            <center><h3>Student</h3></center>
          </div>
      </a>
    </div>

    <footer>
        <p>&#169; Copyright 2021 ChiragChrg</p>
    </footer>
    <script src="./js/index.js"></script>
  </body>
</html>