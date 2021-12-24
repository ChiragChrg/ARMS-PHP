<?php
    include('connect.php');
    // $con = mysqli_connect("localhost","root","","arms");

    // Teacher Login
    if(isset($_POST['submitT'])){
        session_start();
        $email = $_POST['email'];
        $password = md5($_POST['passwordT']);
        $_SESSION['User'] = "Teacher";

        $query = "select * from teacher where email='$email';";
        $resT = mysqli_query($con, $query);
        
        if($resT){
            while($row=mysqli_fetch_assoc($resT)){
                if($row['password']==$password){
                    $name = $row['fname']." ".$row['lname'];
                    $_SESSION['email'] = $email;
                    $_SESSION['password'] = $password;
                    $_SESSION['name'] = $name;
                    header("location: ../user/teacher/index.php");
                }
                else{
                    $_SESSION['Error'] = "Password";
                    header("location: ../login/index.php");
                    // header("location: ../login/index.php?User=Teacher&error=Password");
                }
            }
        }
        else{
            $_SESSION['Error'] = "Regno";
            header("location: ../login/index.php");
            // header("location: ../login/index.php?User=Teacher&error=Email");
        }
    }
?>