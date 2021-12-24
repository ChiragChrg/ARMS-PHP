<?php 
    // Connecting to database
    include('../login/connect.php');
    // $con = mysqli_connect("localhost","root","","arms");
 
    // $createDB = "create database if not exists $dbname;";
    // mysqli_query($con,$createDB);
    // mysqli_select_db($con,$dbname);

    // Creating Table for Student
    $createTableS = "create table if not exists student(
        regno varchar(20) not null primary key,
        course varchar(10) not null,
        fname varchar(20) not null,
        lname varchar(20),
        gender varchar(20) not null,
        dob date not null,
        email varchar(50) not null,
        password varchar(50) not null
    );";
    mysqli_query($con,$createTableS);

    if(isset($_POST['submitS'])){
        $regno = $_POST['regno'];
        $course = $_POST['course'];
        $fName = $_POST['fNameS'];
        $lName = $_POST['lNameS'];
        $gender = $_POST['genderS'];
        $dob = $_POST['dobS'];
        $email = $_POST['emailS'];
        $password = md5($_POST['passwordS']);
        
        $insertTable = "insert into student values(
            '$regno',
            '$course',
            '$fName',
            '$lName',
            '$gender',
            '$dob',
            '$email',
            '$password'
        );";

        $res = mysqli_query($con,$insertTable);
        if($res){
            header('Location: ../login/index.php?User=Student&regSuccess=S');
        }
        else
        header('Location: ./index.php?User=Student&Error=RegError');
    }
?>