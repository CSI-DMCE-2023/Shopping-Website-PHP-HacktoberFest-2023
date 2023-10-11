<?php
session_start();
if(isset($_POST['signupform'])){
    include "dbconnect.php";
    $username1=$_POST["username"];
    $new_sql="SELECT * FROM `signup` WHERE username='$username1'";
    $result1=mysqli_query($conn,$new_sql);
    if(mysqli_num_rows($result1)>0){
        echo "username already exist!!!!";
    }
    else{
    $email=$_POST["email"];
    $pass1=$_POST["password"];
    $filename = $_FILES["fileprofile"]["name"];
    $tempname = $_FILES["fileprofile"]["tmp_name"];    
        $folder = "image/".$filename;   
    $new_pass1=sha1($pass1);
    $sql="INSERT INTO `signup` (`srno`, `username`, `email`, `pass`,`file`) VALUES (NULL, '$username1', '$email', '$new_pass1','$folder')";
    $result=mysqli_query($conn,$sql);
    if ($result) {
        if (move_uploaded_file($tempname, $folder))  {
            $msg = "Image uploaded successfully";
            $_SESSION['username']=$username1;
            $_SESSION['image']=$folder;
            header("Location:welcome.php");
        }else{
            $msg = "Failed to upload image";
      }
    }
    else {
        echo "error".mysqli_error($conn);
    }
}}
?>