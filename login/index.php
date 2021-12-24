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
                        <div class="remember">
                            <input type="checkbox" name="remember">
                            <label for="remember">&nbsp; Remember Me?</label>
                        </div>
                        <input type="submit" class="logSubmit" name="submitT" value="Login">
                    </form>


                    <div class="signUp">
                        <p>Don't have an account yet ?</p>
                        <a href="../signup/index.php" class="logSignup">SignUp</a>
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
                        <div class="remember">
                            <input type="checkbox" name="remember">
                            <label for="remember">&nbsp; Remember Me?</labe>
                        </div>
                        <input type="submit" class="logSubmit" name="submitS" value="Login">
                    </form>


                    <div class="signUp">
                        <p>Don't have an account yet ?</p>
                        <a href="../signup/index.php" class="logSignup">SignUp</a>
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
        //If Teacher was clicked in starting page, Teacher login is displayed else Student Login
        if(isset($LogUser)){
            if($LogUser == 'Teacher'){
                echo "<script>
                    var usr = '$LogUser';
                    setUser(usr); 
                </script>";
                //setUser() function is defined in index.js file
            }
            else if($LogUser == 'Student'){
                echo "<script>
                    var usr = '$LogUser';
                    setUser(usr);
                </script>";
            }
            
            unset($LogUser);
        }

        //Registration Status
        if(isset($_SESSION['RegStatus'])){
            $RegStatus = $_SESSION['RegStatus'];

            if($RegStatus == "SuccessT"){
              echo "<script>
              var Alert = document.querySelector('.signupAlert');
              var AlertText = document.querySelector('.alert');
              Alert.style.display = 'block';
              AlertText.innerHTML = 'Teacher Registration Successful';
              </script>";
            }
            else if($RegStatus == "SuccessS"){
              echo "<script>
              var Alert = document.querySelector('.signupAlert');
              var AlertText = document.querySelector('.alert');
              Alert.style.display = 'block';
              AlertText.innerHTML = 'Student Registration Successful';
              </script>";
            }
        }

        //Invalid Email/ User Not Found/ Other Errors
        if(isset($_SESSION['Error'])){
            $LogError = $_SESSION['Error'];

            if($LogError == "Email"){
                echo "<script>
                    var err = '$LogError';
                    setError(err);
                </script>";
            }

            if($LogError == "Regno"){
                echo "<script>
                    var err = '$LogError';
                    setError(err);
                </script>";
            }

            if($LogError == "Password"){
                echo "<script>
                    var err = '$LogError';
                    setError(err);
                </script>";
            }
        }
    ?>

    <!-- <script src="../js/index.js"></script> -->
</body>
</html>