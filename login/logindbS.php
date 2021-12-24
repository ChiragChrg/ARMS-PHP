<?php
    include('connect.php');
    // $con = mysqli_connect("localhost","root","","arms");

    // Teacher Login
    if(isset($_POST['submitS'])){
        session_start();
        $regno = $_POST['regno'];
        $password = md5($_POST['passwordS']);
        $_SESSION['User'] = "Student";

        $query = "select * from student where regno='$regno';";
        $resS = mysqli_query($con, $query);
         
        if($resS){
            while($row=mysqli_fetch_assoc($resS)){
                if($row['password']==$password){
                    $name = $row['fname']." ".$row['lname'];
                    $email = $row['email'];
                    $_SESSION['email'] = $email;
                    $_SESSION['regno'] = $regno;
                    $_SESSION['password'] = $password;
                    $_SESSION['name'] = $name;
                    header("location: ../user/student/index.php");
                }
                else{
                    $_SESSION['Error'] = "Password";
                    header("location: ../login/index.php");
                    // header("location: ../login/index.php?User=Student&error=Password");
                }
            }
        }
        else{
            $_SESSION['Error'] = "Regno";
            header("location: ../login/index.php");
            // header("location: ../login/index.php?User=Student&error=Regno");
        }
    }
?>