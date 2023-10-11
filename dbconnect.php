<?php 
$server="localhost";
$username="root";
$pass="";
$dbname="shopping";
$conn=mysqli_connect($server,$username,$pass,$dbname);
if($conn){
    echo "successfully connected";
}
else{
    echo "some error occured!!".mysqli_connect_error();

}

?>