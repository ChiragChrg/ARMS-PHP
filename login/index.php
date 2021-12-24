<?php 
    session_start();
    $LogUser = $_SESSION['User'];
    $LogError = $_SESSION['Error'];
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>ARMS Login</title>
    <link rel="stylesheet" href="../css/login.css">
    <link rel="shortcut icon" href="../css/favicon.svg" type="image/x-icon">
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
            <a href="https://sims-arms.000webhostapp.com/">
                <div class="logo">
                    <i class="fad fa-user-graduate fa-3x"></i>
                    <p>&nbsp;ARMS</p>
                </div>
            </a>
        
            <div class="nav">
                <ul>
                  <li>
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
      <!-- Teacher Login Form -->
      <div class="teacherLogin">
            <div class="card">
                <div class="form">
                    <center><h3>Teacher Login</h3></center>
                    <form action="./logindbT.php" method="POST">
                        <div class="logUser">
                            <label>Email</label><br>
                            <input type="text" name="email" placeholder="name@example.com" required>
                        </div>
                        <div class="logPass">
                            <label>Password</label><br>
                            <input type="password" name="passwordT" placeholder="Enter atleast 6 characters" autocomplete="on" required>
                        </div>
                        <input type="submit" class="logSubmit" name="submitT" value="Login">
                    </form>

                    <div class="remember">
                        <input type="checkbox" name="remember" id="remember">
                        <p>&nbsp; Remember Me?</p>
                    </div>

                    <div class="signUp">
                        <p>Don't have an account yet ?</p>
                        <a href="../signup/index.php?User=Teacher" class="logSignup">SignUp</a>
                    </div>
                </div>

                <div class="vector">
                    <img src="../assets/teacherLogin.png" alt="Teacher Vector" width="400">
                </div>
            </div>
      </div>
 
      <!-- Student Login Form -->
      <div class="studentLogin">
            <div class="card">
                <div class="form">
                    <center><h3>Student Login</h3></center>
                    <form action="./logindbS.php" method="POST">
                        <div class="logUser">
                            <label>Registration No</label><br>
                            <input type="text" name="regno" placeholder="3SU19SA00" required>
                        </div>
                        <div class="logPass">
                            <label>Password</label><br>
                            <input type="password" name="passwordS" placeholder="Enter atleast 6 characters" autocomplete="on" required>
                        </div>
                        <input type="submit" class="logSubmit" name="submitS" value="Login">
                    </form>

                    <div class="remember">
                        <input type="checkbox" name="remember" id="remember">
                        <p>&nbsp; Remember Me?</p>
                    </div>

                    <div class="signUp">
                        <p>Don't have an account yet ?</p>
                        <a href="../signup/index.php?User=Student" class="logSignup">SignUp</a>
                    </div>
                </div>

                <div class="vector">
                    <img src="../assets/studentLogin.png" alt="Student Vector" width="400">
                </div>
            </div>
      </div>

      <div class="lost">
          <div class="goback">
              <h2>Are you Lost ?</h2>
              <a href="../index.php">Go Back</a>
          </div>
          <img src="../assets/404.png" alt="404" width="500">
      </div>
    </div>

    <footer>
      <p>&#169; Copyright 2021 ChiragChrg</p>
    </footer>

    <?php
        if(isset($LogUser)){
            if($LogUser == 'Teacher'){
                echo '<script>
                    document.querySelector(".teacherLogin").style.display = "block";
                    document.querySelector(".studentLogin").style.display = "none";
                    document.querySelector(".lost").style.display = "none";
                </script>';
            }
            else if($LogUser == 'Student'){
                echo '<script>
                    document.querySelector(".studentLogin").style.display = "block";
                    document.querySelector(".teacherLogin").style.display = "none";
                    document.querySelector(".lost").style.display = "none";
                </script>';
            }
            
            unset($LogUser);
        }

        //Login after Account Registration
        if(isset($_SESSION['regSuccess'])){
            if($_SESSION['regSuccess'] == "T"){
              echo "<script>
              var Alert = document.querySelector('.signupAlert');
              var AlertText = document.querySelector('.alert');
              Alert.style.display = 'block';
              AlertText.innerHTML = 'Teacher Registration Successful';
              </script>";
            }
            else if($_SESSION['regSuccess'] == "S"){
              echo "<script>
              var Alert = document.querySelector('.signupAlert');
              var AlertText = document.querySelector('.alert');
              Alert.style.display = 'block';
              AlertText.innerHTML = 'Student Registration Successful';
              </script>";
            }
        }

        //Invalid Email/ User Not Found
        if(isset($LogError)){
            if($LogError == "Email"){
                echo "<script>
                var Alert = document.querySelector('.signupAlert');
                var AlertText = document.querySelector('.alert');
                Alert.style.display = 'block';
                AlertText.innerHTML = 'Invalid Email';
                </script>";
            }

            if($LogError == "Regno"){
                echo "<script>
                var Alert = document.querySelector('.signupAlert');
                var AlertText = document.querySelector('.alert');
                Alert.style.display = 'block';
                AlertText.innerHTML = 'Invalid Registration No';
                </script>";
            }

            if($LogError == "Password"){
                echo "<script>
                var Alert = document.querySelector('.signupAlert');
                var AlertText = document.querySelector('.alert');
                Alert.style.display = 'block';
                AlertText.innerHTML = 'Invalid Password';
                </script>";
            }
        }
    ?>

    <?php
        unset($LogError);
    ?>

    <!-- <script src="../../js/index.js"></script> -->
</body>
</html>