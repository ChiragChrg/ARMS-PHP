<?php   
    // Connecting to database
    include('../login/connect.php');
    // $con = mysqli_connect("localhost","root","","arms");

    // $createDB = "create database if not exists $dbname;";
    // mysqli_query($con,$createDB);
    // mysqli_select_db($con,$dbname);

    // Creating Table for Teacher
    $createTableT = "create table if not exists teacher(
        id int not null auto_increment primary key,
        fname varchar(20) not null,
        lname varchar(20),
        gender varchar(10) not null,
        dob date not null,
        email varchar(50) not null,
        password varchar(50) not null
    );";
    mysqli_query($con,$createTableT);

    if(isset($_POST['submitT'])){
        $fName = $_POST['fNameT'];
        $lName = $_POST['lNameT'];
        $gender = $_POST['genderT'];
        $dob = $_POST['dobT'];
        $email = $_POST['emailT'];
        $password = md5($_POST['passwordT']);

        $insertTable = "insert into teacher values(
            id,
            '$fName',
            '$lName',
            '$gender',
            '$dob',
            '$email',
            '$password'
        );";

        $res = mysqli_query($con,$insertTable);
        if($res){
            header('Location: ../login/index.php?User=Teacher&regSuccess=T');
        }
        else
            header('Location: ./index.php?User=Teacher&Error=RegError');
    }
?>