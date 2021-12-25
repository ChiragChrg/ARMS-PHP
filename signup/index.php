<?php 
    session_start();
    $SignUser = $_SESSION['User'];
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>ARMS SignUp</title>
    <link rel="stylesheet" href="../css/signup.css">
    <link rel="shortcut icon" href="../assets/favicon.svg" type="image/x-icon">
    <link
      rel="stylesheet"
      href="https://fonts.googleapis.com/css?family=Quicksand&amp;display=swap"
    />
    <script src="../js/icon.js" crossorigin="anonymous"></script>
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

    <div class="container">
        <!-- <div class="signupAlert"> -->
            <div class="alert">
                Alert Message
            </div>
        <!-- </div>  -->

        <div class="teacherSignup">
            <!-- Teacher SignUp Form -->
            <div class="signupT">
                <h3>Teacher Registration</h3>
                <form action="../signup/SignupdbT.php" method="POST" class="teacherForm">
                    <div class="row">
                        <label for="fNameT">First Name </label>
                        <input type="text" name="fNameT" id="fNameT" placeholder="First Name" required>
                    </div>

                    <div class="row">
                        <label for="lNameT">Last Name </label>
                        <input type="text" name="lNameT" id="lNameT" placeholder="Last Name">
                    </div>

                    <div class="row">
                        <label for="genderT" class="gender">Gender</label>
                        <div class="genflx">
                            <div>
                                <input type="radio" name="genderT" id="maleT" value="Male" required>
                                <label for="maleT">Male</label>
                            </div>
                            <div>
                                <input type="radio" name="genderT" id="femaleT" value="Female">
                                <label for="femaleT">Female</label>
                            </div>
                            <div>
                                <input type="radio" name="genderT" id="otherT" value="Other">
                                <label for="otherT">Other</label>
                            </div>
                        </div>         
                    </div>

                    <div class="row">
                        <label for="dobT">Date of Birth</label>
                        <input type="date" name="dobT" id="dobT" required>
                    </div>

                    <div class="row">
                        <label for="emailT">Email</label>
                        <input type="email" name="emailT" id="emailT" placeholder="Email" required>
                    </div>
                    
                    <div class="row">
                        <label for="passwordT">Password</label>
                        <input type="password" name="passwordT" id="passwordT" placeholder="Password" autocomplete="on" required>
                    </div>
                    
                    <div class="row">
                        <label for="confirmT">Confirm Password</label>
                        <input type="password" name="confirmT" id="confirmT" placeholder="Confirm Password" autocomplete="on" onchange="matchPasswordT()" required>
                    </div>

                    <!-- <div class="row"> -->
                    <div class="TCflx">
                        <input type="checkbox" name="TCAgreeT" class="TCAgreeT" onclick="checkTCT()" required>
                        <label for="TCAgreeT"> By Clicking the checkbox, you agree to<br> the <a href="#">Terms & Conditions</a> of this website.</label>
                    </div>
                    <!-- </div> -->

                    <div class="subReg">
                        <input type="submit" name="submitT" class="RegSubmitT" value="Create Account" disabled="true">
                    </div>
                </form>

                <a href="../login/index.php?User=Teacher" class="toLogin">Already have an account?</a>
            </div>
        </div>

        <div class="studentSignup">
            <!-- Student Signup Form -->
            <div class="signupS">
                <h3>Student Registration</h3>
                <form action="../signup/SignupdbS.php" method="POST" class="studentForm">
                    <div class="row">
                        <label for="course">Course</label>
                        <select name="course" id="course" required>
                            <option value="">Select Course</option>
                            <option value="BCA">BCA</option>
                            <option value="BBA">BBA</option>
                            <option value="B.COM" disabled>B.COM</option>
                            <option value="B.Sc" disabled>B.Sc</option>
                            <option value="B.A" disabled>B.A</option>
                            <option value="B.Ed" disabled>B.Ed</option>
                        </select>
                    </div>

                    <div class="row">
                        <label for="regno">Registration No</label>
                        <input type="text" name="regno" id="regno" placeholder="Eg: 3SU19SA011" required>
                    </div>

                    <div class="row">
                        <label for="fNameS">First Name </label>
                        <input type="text" name="fNameS" id="fNameS" placeholder="First Name" required>
                    </div>

                    <div class="row">
                        <label for="lNameS">Last Name </label>
                        <input type="text" name="lNameS" id="lNameS" placeholder="Last Name">
                    </div>

                    <div class="row">
                        <label for="genderS" class="gender">Gender</label>
                        <div class="genflx">
                            <div>
                                <input type="radio" name="genderS" id="maleS" value="Male" required>
                                <label for="maleS">Male</label>
                            </div>
                            <div>
                                <input type="radio" name="genderS" id="femaleS" value="Female">
                                <label for="femaleS">Female</label>
                            </div>
                            <div>
                                <input type="radio" name="genderS" id="otherS" value="Other">
                                <label for="otherS">Other</label>
                            </div>
                        </div>         
                    </div>

                    <div class="row">
                        <label for="dobS">Date of Birth</label>
                        <input type="date" name="dobS" id="dobS" required>
                    </div>

                    <div class="row">
                        <label for="emailS">Email</label>
                        <input type="email" name="emailS" id="emailS" placeholder="Email" required>
                    </div>
                    
                    <div class="row">
                        <label for="passwordS">Password</label>
                        <input type="password" name="passwordS" id="passwordS" placeholder="Password" autocomplete="on" required>
                    </div>
                    
                    <div class="row">
                        <label for="confirmS">Confirm Password</label>
                        <input type="password" name="confirmS" id="confirmS" placeholder="Confirm Password" autocomplete="on" onchange="matchPasswordS()" required>
                    </div>

                    <!-- <div class="row"> -->
                    <div class="TCflx">
                        <input type="checkbox" name="TCAgreeS" class="TCAgreeS" onclick="checkTCS()" required>
                        <label for="TCAgreeS"> By Clicking the checkbox, you agree to<br> the <a href="#">Terms & Conditions</a> of this website.</label>
                    </div>
                    <!-- </div> -->

                    <div class="subReg">
                        <input type="submit" name="submitS" class="RegSubmitS" value="Create Account" disabled="true">
                    </div>
                </form>

                <a href="../login/index.php?User=Student" class="toLogin">Already have an account?</a>
            </div>
        </div>
    </div>

    <footer>
      <p>&#169; Copyright 2021 ChiragChrg</p>
    </footer>

    <?php
        if(isset($SignUser)){
            if($SignUser == 'Teacher'){
                echo "<script>
                    var usr = '$SignUser';
                    setSignup(usr);
                </script>";
            }
            else if($SignUser == 'Student'){
                echo "<script>
                var usr = '$SignUser';
                setSignup(usr);
            </script>";
            }
        }

        //Error during Registration
        if(isset($_SESSION['Error'])){
            $LogError = $_SESSION['Error'];
            
            if($LogError == "RegError"){
                echo "<script>
                    var err = '$LogError';
                    setError(err);
                </script>";
            }
        }
    ?>

    <script src="../js/index.js"></script>
</body>
</html>