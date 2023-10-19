<?php
// start the session
session_start();
include "conn.php";


$fname=mysqli_real_escape_String($conn,$_POST['First_Name1']);
$lname=mysqli_real_escape_String($conn,$_POST['Last_Name1']);
$uname=mysqli_real_escape_String($conn,$_POST['username1']);
$email=mysqli_real_escape_String($conn,$_POST['Email1']);
$address=mysqli_real_escape_String($conn,$_POST['Address1']);
$telephone=mysqli_real_escape_String($conn,$_POST['Telephone1']);
$password=mysqli_real_escape_String($conn,$_POST['Password1']);



$insert="INSERT INTO `seller`(`First_Name`, `Last_Name`, `Password`, `Address`, `Telephone`, `Email`, `username`) VALUES ('$fname','$lname','$password','$address','$telephone','$email','$uname')";

if(mysqli_query($conn,$insert)){
        echo "Data Sucessfull";
        // header("Location:../Pages/index.php");
        header("Location:registerForm.php");
    }else{
        echo "Error";
        // header("Location:Register_Form.php");
    }


?>