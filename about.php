<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>About | ARMS</title>
    <link rel="stylesheet" media="(min-width:451px)" href="./css/index.css">
    <link rel="stylesheet" media="(max-width:450px)" href="./css/Mobile/index.css">
    <link rel="shortcut icon" href="./assets/favicon.svg" type="image/x-icon">
    <link
        rel="stylesheet"
        href="https://fonts.googleapis.com/css?family=Quicksand&amp;display=swap"
      />
    <script src="./js/icon.js" crossorigin="anonymous"></script>
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
              <a href="./index.php">Home</a>
              <a class="active" href="./about.php">About</a>
              <a href="./contact.php">Contact</a>
            </li>
          </ul>
        </div>
      </div>
    </header>

    <div class="intro">
        <pre>
          <?php echo "<h2>About</h2>"; ?>
          <h1>Academic Resource Management System</h1>
          <h2>By SIMS CCIS</h2>
        </pre>
    </div>

    <div class="container">
        <div class="about">
            Academic Resource Management System (ARMS) is a software built for the 
            education system to provide all the necessary Study materials for the Students.
            Usually student wander around the campus, or search on their smartphones 
            or laptops to find those old study material. 
            <br><br>
            This is a problem for the students as they have to search for the study material 
            at different apps like Whatsapp, Google Classroom, Teachmint etc.
            ARMS is a web application which provides all the study materials in one place. 
            Students can find the study material for all the subjects on the same web application.
            <br><br>
            Teachers can upload the study material for all the subjects and students can find it easily.
            Teachers and Students have to login to the web application to access the study material.
            Students can now study for their exams without any hassle.
        </div>
    </div>

    <footer>
        <p>&#169; Copyright 2021 ChiragChrg</p>
    </footer>
    <script src="./js/nav.js"></script>
  </body>
</html>