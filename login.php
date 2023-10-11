<?php
if(isset($_POST["submit"])){
$username2=$_POST['username'];
$pass2=sha1($_POST['userpass']);
include "dbconnect.php";
$sql="SELECT * FROM `signup` WHERE username='$username2' and pass='$pass2'";
$result=mysqli_query($conn,$sql);
if(mysqli_num_rows($result)>0){
    while ($a =mysqli_fetch_assoc($result)) {
        session_start();
    $_SESSION['username']=$username2;
    $_SESSION['image']=$a['file'];
    header("Location:welcome.php");
    }
}
else {
    echo "Invalid username or id!!";
}
}
?>