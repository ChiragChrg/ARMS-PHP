<?php
    //000.webhost.com Database
    $dbServer = "localhost";
    $dbUser = "id18122207_chiragchrg";
    $dbPass = "your_password";
    $dbname = "id18122207_arms";

    //Localhost Database
    // $dbServer = "localhost";
    // $dbUser = "root";
    // $dbPass = "";
    // $dbname = "arms";

    $con = mysqli_connect($dbServer,$dbUser,$dbPass);
    mysqli_select_db($con,$dbname);

    // <?php
    // include('../login/connect.php');
    // ?0>

    //Get User Login Selection
    if(isset($_GET['User'])){
        session_start();
        $logUser = $_GET['User'];
        
        if($logUser == "Teacher"){
            $_SESSION['User'] = "Teacher";
            header("Location: ./index.php");
        }
        else if($logUser == "Student"){
            $_SESSION['User'] = "Student";
            header("Location: ./index.php");
        }
    }
    
?>
