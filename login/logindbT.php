<?php
    include('connect.php');
    // $con = mysqli_connect("localhost","root","","arms");

    // Teacher Login
    if(isset($_POST['submitT'])){
        $email = $_POST['email'];
        $password = md5($_POST['passwordT']);

        $query = "select * from teacher where email='$email';";
        $resT = mysqli_query($con, $query);
        
        if($resT){
            while($row=mysqli_fetch_assoc($resT)){
                if($row['password']==$password){
                    $name = $row['fname']." ".$row['lname'];
                    session_start();
                    $_SESSION['email'] = $email;
                    $_SESSION['password'] = $password;
                    $_SESSION['type'] = "teacher";
                    $_SESSION['name'] = $name;
                    header("location: ../user/teacher/index.php");
                }
                else{
                    header("location: ../login/index.php?User=Teacher&error=Password");
                }
            }
        }
        else{
            header("location: ../login/index.php?User=Teacher&error=Email");
        }
    }
?>